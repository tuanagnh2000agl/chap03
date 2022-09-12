<?php
namespace AIOSEO\Plugin\Common\Options;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use AIOSEO\Plugin\Common\Traits;

/**
 * Class that holds all internal options for AIOSEO.
 *
 * @since 4.0.0
 */
class InternalOptions {
	use Traits\Options;

	/**
	 * Holds a list of all the possible deprecated options.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	protected $allDeprecatedOptions = [
		'enableSchemaMarkup',
		'excludePosts',
		'excludeTerms',
		'autogenerateDescriptions',
		'descriptionFormat',
		'badBotBlocker',
		// 'runShortcodesInDescription', TODO: Remove this in a future update.
		'staticSitemap',
		'staticVideoSitemap',
		'useContentForAutogeneratedDescriptions',
		'googleAnalytics'
	];

	/**
	 * All the default options.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	protected $defaults = [
		// phpcs:disable WordPress.Arrays.ArrayDeclarationSpacing.AssociativeArrayFound
		'internal'     => [
			'validLicenseKey'   => [ 'type' => 'string' ],
			'lastActiveVersion' => [ 'type' => 'string', 'default' => '0.0' ],
			'migratedVersion'   => [ 'type' => 'string' ],
			'siteAnalysis'      => [
				'connectToken' => [ 'type' => 'string' ],
				'score'        => [ 'type' => 'number', 'default' => 0 ],
				'results'      => [ 'type' => 'string' ],
				'competitors'  => [ 'type' => 'array', 'default' => [], 'preserveHtml' => true ]
			],
			'headlineAnalysis'  => [
				'headlines' => [ 'type' => 'array', 'default' => [] ]
			],
			'wizard'            => [ 'type' => 'string' ],
			'category'          => [ 'type' => 'string' ],
			'categoryOther'     => [ 'type' => 'string' ],
			'deprecatedOptions' => [ 'type' => 'array', 'default' => [] ]
		],
		'integrations' => [
			'semrush' => [
				'accessToken'  => [ 'type' => 'string' ],
				'tokenType'    => [ 'type' => 'string' ],
				'expires'      => [ 'type' => 'string' ],
				'refreshToken' => [ 'type' => 'string' ]
			]
		],
		'database'     => [
			'installedTables' => [ 'type' => 'string' ]
		]
		// phpcs:enable WordPress.Arrays.ArrayDeclarationSpacing.AssociativeArrayFound
	];

	/**
	 * The Construct method.
	 *
	 * @since 4.0.0
	 *
	 * @param string $optionsName The options name.
	 */
	public function __construct( $optionsName = 'aioseo_options_internal' ) {
		$this->optionsName = is_network_admin() ? $optionsName . '_network' : $optionsName;

		$this->init();

		add_action( 'shutdown', [ $this, 'save' ] );
	}

	/**
	 * Initializes the options.
	 *
	 * @since 4.0.0
	 *
	 * @return void
	 */
	protected function init() {
		// Options from the DB.
		$dbOptions = $this->getDbOptions( $this->optionsName );

		// Refactor options.
		$this->defaultsMerged = array_replace_recursive( $this->defaults, $this->defaultsMerged );

		$options = array_replace_recursive(
			$this->defaultsMerged,
			$this->addValueToValuesArray( $this->defaultsMerged, $dbOptions )
		);

		aioseo()->core->optionsCache->setOptions( $this->optionsName, apply_filters( 'aioseo_get_options_internal', $options ) );

		// Get the localized options.
		$dbOptionsLocalized = get_option( $this->optionsName . '_localized' );
		if ( empty( $dbOptionsLocalized ) ) {
			$dbOptionsLocalized = [];
		}
		$this->localized = $dbOptionsLocalized;
	}

	/**
	 * Get all the deprecated options.
	 *
	 * @since 4.0.0
	 *
	 * @param  bool  $includeNamesAndValues Whether or not to include option names.
	 * @return array                        An array of deprecated options.
	 */
	public function getAllDeprecatedOptions( $includeNamesAndValues = false ) {
		if ( ! $includeNamesAndValues ) {
			return $this->allDeprecatedOptions;
		}

		$options = [];
		foreach ( $this->allDeprecatedOptions as $deprecatedOption ) {
			$options[] = [
				'label'   => ucwords( str_replace( '_', ' ', aioseo()->helpers->toSnakeCase( $deprecatedOption ) ) ),
				'value'   => $deprecatedOption,
				'enabled' => in_array( $deprecatedOption, aioseo()->internalOptions->internal->deprecatedOptions, true )
			];
		}

		return $options;
	}

	/**
	 * Sanitizes, then saves the options to the database.
	 *
	 * @since 4.0.0
	 *
	 * @param  array $options An array of options to sanitize, then save.
	 * @return void
	 */
	public function sanitizeAndSave( $options ) {
		if ( ! is_array( $options ) ) {
			return;
		}

		// Refactor options.
		$cachedOptions = aioseo()->core->optionsCache->getOptions( $this->optionsName );
		$dbOptions     = array_replace_recursive(
			$cachedOptions,
			$this->addValueToValuesArray( $cachedOptions, $options, [], true )
		);

		$dbOptions['internal']['siteAnalysis']['competitors']['value'] = $this->sanitizeField( $options['internal']['siteAnalysis']['competitors'], 'array', true );

		aioseo()->core->optionsCache->setOptions( $this->optionsName, $dbOptions );

		// Update localized options.
		update_option( $this->optionsName . '_localized', $this->localized );

		// Update values.
		$this->save( true );
	}
}