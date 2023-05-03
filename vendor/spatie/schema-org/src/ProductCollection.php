<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\CollectionContract;
use Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use Spatie\SchemaOrg\Contracts\ProductCollectionContract;
use Spatie\SchemaOrg\Contracts\ProductContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A set of products (either [[ProductGroup]]s or specific variants) that are
 * listed together e.g. in an [[Offer]].
 *
 * @see https://schema.org/ProductCollection
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2597
 *
 */
class ProductCollection extends BaseType implements ProductCollectionContract, CollectionContract, CreativeWorkContract, ProductContract, ThingContract
{
    /**
     * The subject matter of the content.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $about
     *
     * @return static
     *
     * @see https://schema.org/about
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     *
     * @param string|string[] $abstract
     *
     * @return static
     *
     * @see https://schema.org/abstract
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/276
     */
    public function abstract($abstract)
    {
        return $this->setProperty('abstract', $abstract);
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a
     * person may process or perceive information. Values should be drawn from
     * the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     *
     * @param string|string[] $accessMode
     *
     * @return static
     *
     * @see https://schema.org/accessMode
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessMode($accessMode)
    {
        return $this->setProperty('accessMode', $accessMode);
    }

    /**
     * A list of single or combined accessModes that are sufficient to
     * understand all the intellectual content of a resource. Values should be
     * drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[] $accessModeSufficient
     *
     * @return static
     *
     * @see https://schema.org/accessModeSufficient
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessModeSufficient($accessModeSufficient)
    {
        return $this->setProperty('accessModeSufficient', $accessModeSufficient);
    }

    /**
     * Indicates that the resource is compatible with the referenced
     * accessibility API. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     *
     * @param string|string[] $accessibilityAPI
     *
     * @return static
     *
     * @see https://schema.org/accessibilityAPI
     */
    public function accessibilityAPI($accessibilityAPI)
    {
        return $this->setProperty('accessibilityAPI', $accessibilityAPI);
    }

    /**
     * Identifies input methods that are sufficient to fully control the
     * described resource. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     *
     * @param string|string[] $accessibilityControl
     *
     * @return static
     *
     * @see https://schema.org/accessibilityControl
     */
    public function accessibilityControl($accessibilityControl)
    {
        return $this->setProperty('accessibilityControl', $accessibilityControl);
    }

    /**
     * Content features of the resource, such as accessible media, alternatives
     * and supported enhancements for accessibility. Values should be drawn from
     * the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     *
     * @param string|string[] $accessibilityFeature
     *
     * @return static
     *
     * @see https://schema.org/accessibilityFeature
     */
    public function accessibilityFeature($accessibilityFeature)
    {
        return $this->setProperty('accessibilityFeature', $accessibilityFeature);
    }

    /**
     * A characteristic of the described resource that is physiologically
     * dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should
     * be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     *
     * @param string|string[] $accessibilityHazard
     *
     * @return static
     *
     * @see https://schema.org/accessibilityHazard
     */
    public function accessibilityHazard($accessibilityHazard)
    {
        return $this->setProperty('accessibilityHazard', $accessibilityHazard);
    }

    /**
     * A human-readable summary of specific accessibility features or
     * deficiencies, consistent with the other accessibility metadata but
     * expressing subtleties such as "short descriptions are present but long
     * descriptions will be needed for non-visual users" or "short descriptions
     * are present and no long descriptions are needed."
     *
     * @param string|string[] $accessibilitySummary
     *
     * @return static
     *
     * @see https://schema.org/accessibilitySummary
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessibilitySummary($accessibilitySummary)
    {
        return $this->setProperty('accessibilitySummary', $accessibilitySummary);
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $accountablePerson
     *
     * @return static
     *
     * @see https://schema.org/accountablePerson
     */
    public function accountablePerson($accountablePerson)
    {
        return $this->setProperty('accountablePerson', $accountablePerson);
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise
     * acquired, for the current item.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $acquireLicensePage
     *
     * @return static
     *
     * @see https://schema.org/acquireLicensePage
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2454
     */
    public function acquireLicensePage($acquireLicensePage)
    {
        return $this->setProperty('acquireLicensePage', $acquireLicensePage);
    }

    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see https://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\Contracts\AggregateRatingContract|\Spatie\SchemaOrg\Contracts\AggregateRatingContract[] $aggregateRating
     *
     * @return static
     *
     * @see https://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A secondary title of the CreativeWork.
     *
     * @param string|string[] $alternativeHeadline
     *
     * @return static
     *
     * @see https://schema.org/alternativeHeadline
     */
    public function alternativeHeadline($alternativeHeadline)
    {
        return $this->setProperty('alternativeHeadline', $alternativeHeadline);
    }

    /**
     * Indicates a page or other link involved in archival of a
     * [[CreativeWork]]. In the case of [[MediaReview]], the items in a
     * [[MediaReviewItem]] may often become inaccessible, but be archived by
     * archival, journalistic, activist, or law enforcement organizations. In
     * such cases, the referenced page may not directly publish the content.
     *
     * @param \Spatie\SchemaOrg\Contracts\WebPageContract|\Spatie\SchemaOrg\Contracts\WebPageContract[]|string|string[] $archivedAt
     *
     * @return static
     *
     * @see https://schema.org/archivedAt
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public function archivedAt($archivedAt)
    {
        return $this->setProperty('archivedAt', $archivedAt);
    }

    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character
     * alphanumeric unique identifier assigned by Amazon.com and its partners
     * for product identification within the Amazon organization (summary from
     * [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s
     * article).
     *
     * Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see
     * documentation from Amazon for authoritative details.
     * ASINs are most commonly encoded as text strings, but the [asin] property
     * supports URL/URI as potential values too.
     *
     * @param string|string[] $asin
     *
     * @return static
     *
     * @see https://schema.org/asin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function asin($asin)
    {
        return $this->setProperty('asin', $asin);
    }

    /**
     * The item being described is intended to assess the competency or learning
     * outcome defined by the referenced term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $assesses
     *
     * @return static
     *
     * @see https://schema.org/assesses
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2427
     */
    public function assesses($assesses)
    {
        return $this->setProperty('assesses', $assesses);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $associatedMedia
     *
     * @return static
     *
     * @see https://schema.org/associatedMedia
     */
    public function associatedMedia($associatedMedia)
    {
        return $this->setProperty('associatedMedia', $associatedMedia);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudienceContract|\Spatie\SchemaOrg\Contracts\AudienceContract[] $audience
     *
     * @return static
     *
     * @see https://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An embedded audio object.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudioObjectContract|\Spatie\SchemaOrg\Contracts\AudioObjectContract[]|\Spatie\SchemaOrg\Contracts\ClipContract|\Spatie\SchemaOrg\Contracts\ClipContract[]|\Spatie\SchemaOrg\Contracts\MusicRecordingContract|\Spatie\SchemaOrg\Contracts\MusicRecordingContract[] $audio
     *
     * @return static
     *
     * @see https://schema.org/audio
     * @link https://github.com/schemaorg/schemaorg/issues/2420
     */
    public function audio($audio)
    {
        return $this->setProperty('audio', $audio);
    }

    /**
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $author
     *
     * @return static
     *
     * @see https://schema.org/author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see https://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see https://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Spatie\SchemaOrg\Contracts\BrandContract|\Spatie\SchemaOrg\Contracts\BrandContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $brand
     *
     * @return static
     *
     * @see https://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param \Spatie\SchemaOrg\Contracts\CategoryCodeContract|\Spatie\SchemaOrg\Contracts\CategoryCodeContract[]|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract[]|\Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $category
     *
     * @return static
     *
     * @see https://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * Fictional person connected with a creative work.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $character
     *
     * @return static
     *
     * @see https://schema.org/character
     */
    public function character($character)
    {
        return $this->setProperty('character', $character);
    }

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $citation
     *
     * @return static
     *
     * @see https://schema.org/citation
     */
    public function citation($citation)
    {
        return $this->setProperty('citation', $citation);
    }

    /**
     * The number of items in the [[Collection]].
     *
     * @param int|int[] $collectionSize
     *
     * @return static
     *
     * @see https://schema.org/collectionSize
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1759
     */
    public function collectionSize($collectionSize)
    {
        return $this->setProperty('collectionSize', $collectionSize);
    }

    /**
     * The color of the product.
     *
     * @param string|string[] $color
     *
     * @return static
     *
     * @see https://schema.org/color
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function color($color)
    {
        return $this->setProperty('color', $color);
    }

    /**
     * Comments, typically from users.
     *
     * @param \Spatie\SchemaOrg\Contracts\CommentContract|\Spatie\SchemaOrg\Contracts\CommentContract[] $comment
     *
     * @return static
     *
     * @see https://schema.org/comment
     */
    public function comment($comment)
    {
        return $this->setProperty('comment', $comment);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or
     * Answer) has received. This is most applicable to works published in Web
     * sites with commenting system; additional comments may exist elsewhere.
     *
     * @param int|int[] $commentCount
     *
     * @return static
     *
     * @see https://schema.org/commentCount
     */
    public function commentCount($commentCount)
    {
        return $this->setProperty('commentCount', $commentCount);
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an
     * item. Typically used for real world items such as an [[ArchiveComponent]]
     * held by an [[ArchiveOrganization]]. This property is not suitable for use
     * as a general Web access control mechanism. It is expressed only in
     * natural language.
     *
     * For example "Available by appointment from the Reading Room" or
     * "Accessible only from logged-in accounts ".
     *
     * @param string|string[] $conditionsOfAccess
     *
     * @return static
     *
     * @see https://schema.org/conditionsOfAccess
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2173
     */
    public function conditionsOfAccess($conditionsOfAccess)
    {
        return $this->setProperty('conditionsOfAccess', $conditionsOfAccess);
    }

    /**
     * The location depicted or described in the content. For example, the
     * location in a photograph or painting.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $contentLocation
     *
     * @return static
     *
     * @see https://schema.org/contentLocation
     */
    public function contentLocation($contentLocation)
    {
        return $this->setProperty('contentLocation', $contentLocation);
    }

    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     *
     * @param \Spatie\SchemaOrg\Contracts\RatingContract|\Spatie\SchemaOrg\Contracts\RatingContract[]|string|string[] $contentRating
     *
     * @return static
     *
     * @see https://schema.org/contentRating
     */
    public function contentRating($contentRating)
    {
        return $this->setProperty('contentRating', $contentRating);
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles,
     * video objects etc.) that emphasise a particular moment within an Event.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $contentReferenceTime
     *
     * @return static
     *
     * @see https://schema.org/contentReferenceTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1050
     */
    public function contentReferenceTime($contentReferenceTime)
    {
        return $this->setProperty('contentReferenceTime', $contentReferenceTime);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $contributor
     *
     * @return static
     *
     * @see https://schema.org/contributor
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $copyrightHolder
     *
     * @return static
     *
     * @see https://schema.org/copyrightHolder
     */
    public function copyrightHolder($copyrightHolder)
    {
        return $this->setProperty('copyrightHolder', $copyrightHolder);
    }

    /**
     * Text of a notice appropriate for describing the copyright aspects of this
     * Creative Work, ideally indicating the owner of the copyright for the
     * Work.
     *
     * @param string|string[] $copyrightNotice
     *
     * @return static
     *
     * @see https://schema.org/copyrightNotice
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2659
     */
    public function copyrightNotice($copyrightNotice)
    {
        return $this->setProperty('copyrightNotice', $copyrightNotice);
    }

    /**
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     *
     * @param float|float[]|int|int[] $copyrightYear
     *
     * @return static
     *
     * @see https://schema.org/copyrightYear
     */
    public function copyrightYear($copyrightYear)
    {
        return $this->setProperty('copyrightYear', $copyrightYear);
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a
     * [[CorrectionComment]], textually or in another document.
     *
     * @param \Spatie\SchemaOrg\Contracts\CorrectionCommentContract|\Spatie\SchemaOrg\Contracts\CorrectionCommentContract[]|string|string[] $correction
     *
     * @return static
     *
     * @see https://schema.org/correction
     * @see https://pending.schema.org
     */
    public function correction($correction)
    {
        return $this->setProperty('correction', $correction);
    }

    /**
     * The place where the product was assembled.
     *
     * @param string|string[] $countryOfAssembly
     *
     * @return static
     *
     * @see https://schema.org/countryOfAssembly
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfAssembly($countryOfAssembly)
    {
        return $this->setProperty('countryOfAssembly', $countryOfAssembly);
    }

    /**
     * The place where the item (typically [[Product]]) was last processed and
     * tested before importation.
     *
     * @param string|string[] $countryOfLastProcessing
     *
     * @return static
     *
     * @see https://schema.org/countryOfLastProcessing
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfLastProcessing($countryOfLastProcessing)
    {
        return $this->setProperty('countryOfLastProcessing', $countryOfLastProcessing);
    }

    /**
     * The country of origin of something, including products as well as
     * creative  works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle
     * offices of the production company or individual responsible for the
     * movie. For other kinds of [[CreativeWork]] it is difficult to provide
     * fully general guidance, and properties such as [[contentLocation]] and
     * [[locationCreated]] may be more applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot
     * be fully enumerated here.
     *
     * @param \Spatie\SchemaOrg\Contracts\CountryContract|\Spatie\SchemaOrg\Contracts\CountryContract[] $countryOfOrigin
     *
     * @return static
     *
     * @see https://schema.org/countryOfOrigin
     */
    public function countryOfOrigin($countryOfOrigin)
    {
        return $this->setProperty('countryOfOrigin', $countryOfOrigin);
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle.
     * Example terms include Incomplete, Draft, Published, Obsolete. Some
     * organizations define a set of terms for the stages of their publication
     * lifecycle.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $creativeWorkStatus
     *
     * @return static
     *
     * @see https://schema.org/creativeWorkStatus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/987
     */
    public function creativeWorkStatus($creativeWorkStatus)
    {
        return $this->setProperty('creativeWorkStatus', $creativeWorkStatus);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $creator
     *
     * @return static
     *
     * @see https://schema.org/creator
     */
    public function creator($creator)
    {
        return $this->setProperty('creator', $creator);
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s)
     * associated with a published Creative Work.
     *
     * @param string|string[] $creditText
     *
     * @return static
     *
     * @see https://schema.org/creditText
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2659
     */
    public function creditText($creditText)
    {
        return $this->setProperty('creditText', $creditText);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateCreated
     *
     * @return static
     *
     * @see https://schema.org/dateCreated
     */
    public function dateCreated($dateCreated)
    {
        return $this->setProperty('dateCreated', $dateCreated);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateModified
     *
     * @return static
     *
     * @see https://schema.org/dateModified
     */
    public function dateModified($dateModified)
    {
        return $this->setProperty('dateModified', $dateModified);
    }

    /**
     * Date of first broadcast/publication.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datePublished
     *
     * @return static
     *
     * @see https://schema.org/datePublished
     */
    public function datePublished($datePublished)
    {
        return $this->setProperty('datePublished', $datePublished);
    }

    /**
     * The depth of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $depth
     *
     * @return static
     *
     * @see https://schema.org/depth
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param string|string[] $discussionUrl
     *
     * @return static
     *
     * @see https://schema.org/discussionUrl
     */
    public function discussionUrl($discussionUrl)
    {
        return $this->setProperty('discussionUrl', $discussionUrl);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry)
     * [[identifier]] representing a specific edit / edition for a work of film
     * or television.
     *
     * For example, the motion picture known as "Ghostbusters" whose
     * [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits,
     * e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and
     * "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     *
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for
     * both works and their multiple expressions, it is possible to use
     * [[titleEIDR]] alone (for a general description), or alongside
     * [[editEIDR]] for a more edit-specific description.
     *
     * @param string|string[] $editEIDR
     *
     * @return static
     *
     * @see https://schema.org/editEIDR
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2469
     */
    public function editEIDR($editEIDR)
    {
        return $this->setProperty('editEIDR', $editEIDR);
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $editor
     *
     * @return static
     *
     * @see https://schema.org/editor
     */
    public function editor($editor)
    {
        return $this->setProperty('editor', $editor);
    }

    /**
     * An alignment to an established educational framework.
     *
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     *
     * @param \Spatie\SchemaOrg\Contracts\AlignmentObjectContract|\Spatie\SchemaOrg\Contracts\AlignmentObjectContract[] $educationalAlignment
     *
     * @return static
     *
     * @see https://schema.org/educationalAlignment
     */
    public function educationalAlignment($educationalAlignment)
    {
        return $this->setProperty('educationalAlignment', $educationalAlignment);
    }

    /**
     * The level in terms of progression through an educational or training
     * context. Examples of educational levels include 'beginner',
     * 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $educationalLevel
     *
     * @return static
     *
     * @see https://schema.org/educationalLevel
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1779
     */
    public function educationalLevel($educationalLevel)
    {
        return $this->setProperty('educationalLevel', $educationalLevel);
    }

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $educationalUse
     *
     * @return static
     *
     * @see https://schema.org/educationalUse
     */
    public function educationalUse($educationalUse)
    {
        return $this->setProperty('educationalUse', $educationalUse);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $encoding
     *
     * @return static
     *
     * @see https://schema.org/encoding
     */
    public function encoding($encoding)
    {
        return $this->setProperty('encoding', $encoding);
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and
     * [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)),
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for
     * .mp3 etc.
     *
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside
     * particular [[encodingFormat]] information.
     *
     * Unregistered or niche encoding and file formats can be indicated instead
     * via the most appropriate URL, e.g. defining Web page or a
     * Wikipedia/Wikidata entry.
     *
     * @param string|string[] $encodingFormat
     *
     * @return static
     *
     * @see https://schema.org/encodingFormat
     */
    public function encodingFormat($encodingFormat)
    {
        return $this->setProperty('encodingFormat', $encodingFormat);
    }

    /**
     * A media object that encodes this CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $encodings
     *
     * @return static
     *
     * @see https://schema.org/encodings
     */
    public function encodings($encodings)
    {
        return $this->setProperty('encodings', $encodings);
    }

    /**
     * A creative work that this work is an
     * example/instance/realization/derivation of.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $exampleOfWork
     *
     * @return static
     *
     * @see https://schema.org/exampleOfWork
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function exampleOfWork($exampleOfWork)
    {
        return $this->setProperty('exampleOfWork', $exampleOfWork);
    }

    /**
     * Date the content expires and is no longer useful or available. For
     * example a [[VideoObject]] or [[NewsArticle]] whose availability or
     * relevance is time-limited, or a [[ClaimReview]] fact check whose
     * publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expires
     *
     * @return static
     *
     * @see https://schema.org/expires
     */
    public function expires($expires)
    {
        return $this->setProperty('expires', $expires);
    }

    /**
     * Media type, typically MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of
     * the content, e.g. application/zip of a SoftwareApplication binary. In
     * cases where a CreativeWork has several media type representations,
     * 'encoding' can be used to indicate each MediaObject alongside particular
     * fileFormat information. Unregistered or niche file formats can be
     * indicated instead via the most appropriate URL, e.g. defining Web page or
     * a Wikipedia entry.
     *
     * @param string|string[] $fileFormat
     *
     * @return static
     *
     * @see https://schema.org/fileFormat
     */
    public function fileFormat($fileFormat)
    {
        return $this->setProperty('fileFormat', $fileFormat);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $funder
     *
     * @return static
     *
     * @see https://schema.org/funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GrantContract|\Spatie\SchemaOrg\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string|string[] $genre
     *
     * @return static
     *
     * @see https://schema.org/genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * A Global Trade Item Number
     * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify
     * trade items, including products and services, using numeric
     * identification codes.
     *
     * The GS1 [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) express
     * GTINs as URLs (URIs, IRIs, etc.). Details including regular expression
     * examples can be found in, Section 6 of the GS1 URI Syntax specification;
     * see also [schema.org tracking
     * issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809)
     * for schema.org-specific discussion. A correct [[gtin]] value should be a
     * valid GTIN, which means that it should be an all-numeric string of either
     * 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a
     * string. The numeric component should also have a [valid GS1 check
     * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for
     * more details. Left-padding of the gtin values is not required or
     * encouraged. The [[gtin]] property generalizes the earlier [[gtin8]],
     * [[gtin12]], [[gtin13]], and [[gtin14]] properties.
     *
     * Note also that this is a definition for how to include GTINs in
     * Schema.org data, and not a definition of GTINs in general - see the GS1
     * documentation for authoritative details.
     *
     * @param string|string[] $gtin
     *
     * @return static
     *
     * @see https://schema.org/gtin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function gtin($gtin)
    {
        return $this->setProperty('gtin', $gtin);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see https://schema.org/gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see https://schema.org/gtin13
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see https://schema.org/gtin14
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see https://schema.org/gtin8
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * Used to tag an item to be intended or suitable for consumption or use by
     * adults only.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdultOrientedEnumerationContract|\Spatie\SchemaOrg\Contracts\AdultOrientedEnumerationContract[] $hasAdultConsideration
     *
     * @return static
     *
     * @see https://schema.org/hasAdultConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public function hasAdultConsideration($hasAdultConsideration)
    {
        return $this->setProperty('hasAdultConsideration', $hasAdultConsideration);
    }

    /**
     * Defines the energy efficiency Category (also known as "class" or
     * "rating") for a product according to an international energy efficiency
     * standard.
     *
     * @param \Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract|\Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract[] $hasEnergyConsumptionDetails
     *
     * @return static
     *
     * @see https://schema.org/hasEnergyConsumptionDetails
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        return $this->setProperty('hasEnergyConsumptionDetails', $hasEnergyConsumptionDetails);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of
     * a bicycle, or the gauge of a screw. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see https://schema.org/hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract|\Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract[] $hasMerchantReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasMerchantReturnPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        return $this->setProperty('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);
    }

    /**
     * Indicates an item or CreativeWork that is part of this item, or
     * CreativeWork (in some sense).
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $hasPart
     *
     * @return static
     *
     * @see https://schema.org/hasPart
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function hasPart($hasPart)
    {
        return $this->setProperty('hasPart', $hasPart);
    }

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract|\Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract[] $hasProductReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasProductReturnPolicy
     * @see https://attic.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasProductReturnPolicy($hasProductReturnPolicy)
    {
        return $this->setProperty('hasProductReturnPolicy', $hasProductReturnPolicy);
    }

    /**
     * Headline of the article.
     *
     * @param string|string[] $headline
     *
     * @return static
     *
     * @see https://schema.org/headline
     */
    public function headline($headline)
    {
        return $this->setProperty('headline', $headline);
    }

    /**
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see https://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $inLanguage
     *
     * @return static
     *
     * @see https://schema.org/inLanguage
     * @link https://github.com/schemaorg/schemaorg/issues/2382
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     *
     * @param string|string[] $inProductGroupWithID
     *
     * @return static
     *
     * @see https://schema.org/inProductGroupWithID
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function inProductGroupWithID($inProductGroupWithID)
    {
        return $this->setProperty('inProductGroupWithID', $inProductGroupWithID);
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the
     * products included in  an [[Offer]] or [[ProductCollection]].
     *
     * @param \Spatie\SchemaOrg\Contracts\TypeAndQuantityNodeContract|\Spatie\SchemaOrg\Contracts\TypeAndQuantityNodeContract[] $includesObject
     *
     * @return static
     *
     * @see https://schema.org/includesObject
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function includesObject($includesObject)
    {
        return $this->setProperty('includesObject', $includesObject);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @param \Spatie\SchemaOrg\Contracts\InteractionCounterContract|\Spatie\SchemaOrg\Contracts\InteractionCounterContract[] $interactionStatistic
     *
     * @return static
     *
     * @see https://schema.org/interactionStatistic
     * @link https://github.com/schemaorg/schemaorg/issues/2421
     */
    public function interactionStatistic($interactionStatistic)
    {
        return $this->setProperty('interactionStatistic', $interactionStatistic);
    }

    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @param string|string[] $interactivityType
     *
     * @return static
     *
     * @see https://schema.org/interactivityType
     */
    public function interactivityType($interactivityType)
    {
        return $this->setProperty('interactivityType', $interactivityType);
    }

    /**
     * Used to indicate a specific claim contained, implied, translated or
     * refined from the content of a [[MediaObject]] or other [[CreativeWork]].
     * The interpreting party can be indicated using [[claimInterpreter]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ClaimContract|\Spatie\SchemaOrg\Contracts\ClaimContract[] $interpretedAsClaim
     *
     * @return static
     *
     * @see https://schema.org/interpretedAsClaim
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public function interpretedAsClaim($interpretedAsClaim)
    {
        return $this->setProperty('interpretedAsClaim', $interpretedAsClaim);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isAccessoryOrSparePartFor
     *
     * @return static
     *
     * @see https://schema.org/isAccessoryOrSparePartFor
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        return $this->setProperty('isAccessoryOrSparePartFor', $isAccessoryOrSparePartFor);
    }

    /**
     * A resource from which this work is derived or from which it is a
     * modification or adaption.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $isBasedOn
     *
     * @return static
     *
     * @see https://schema.org/isBasedOn
     */
    public function isBasedOn($isBasedOn)
    {
        return $this->setProperty('isBasedOn', $isBasedOn);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $isBasedOnUrl
     *
     * @return static
     *
     * @see https://schema.org/isBasedOnUrl
     */
    public function isBasedOnUrl($isBasedOnUrl)
    {
        return $this->setProperty('isBasedOnUrl', $isBasedOnUrl);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isConsumableFor
     *
     * @return static
     *
     * @see https://schema.org/isConsumableFor
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isConsumableFor($isConsumableFor)
    {
        return $this->setProperty('isConsumableFor', $isConsumableFor);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool|bool[] $isFamilyFriendly
     *
     * @return static
     *
     * @see https://schema.org/isFamilyFriendly
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in
     * some sense), is part of.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $isPartOf
     *
     * @return static
     *
     * @see https://schema.org/isPartOf
     */
    public function isPartOf($isPartOf)
    {
        return $this->setProperty('isPartOf', $isPartOf);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isRelatedTo
     *
     * @return static
     *
     * @see https://schema.org/isRelatedTo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isSimilarTo
     *
     * @return static
     *
     * @see https://schema.org/isSimilarTo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base
     * product from which this product is a variant. It is safe to infer that
     * the variant inherits all product features from the base model, unless
     * defined locally. This is not transitive. In the case of a
     * [[ProductGroup]], the group description also serves as a template,
     * representing a set of Products that vary on explicitly defined, specific
     * dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with
     * [[ProductGroup]], this property can apply to any [[Product]] included in
     * the group.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductGroupContract|\Spatie\SchemaOrg\Contracts\ProductGroupContract[]|\Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[] $isVariantOf
     *
     * @return static
     *
     * @see https://schema.org/isVariantOf
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isVariantOf($isVariantOf)
    {
        return $this->setProperty('isVariantOf', $isVariantOf);
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of
     * the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of
     * products accepted for returns.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferItemConditionContract|\Spatie\SchemaOrg\Contracts\OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see https://schema.org/itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in
     * a keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $keywords
     *
     * @return static
     *
     * @see https://schema.org/keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $learningResourceType
     *
     * @return static
     *
     * @see https://schema.org/learningResourceType
     */
    public function learningResourceType($learningResourceType)
    {
        return $this->setProperty('learningResourceType', $learningResourceType);
    }

    /**
     * A license document that applies to this content, typically indicated by
     * URL.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $license
     *
     * @return static
     *
     * @see https://schema.org/license
     */
    public function license($license)
    {
        return $this->setProperty('license', $license);
    }

    /**
     * The location where the CreativeWork was created, which may not be the
     * same as the location depicted in the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $locationCreated
     *
     * @return static
     *
     * @see https://schema.org/locationCreated
     */
    public function locationCreated($locationCreated)
    {
        return $this->setProperty('locationCreated', $locationCreated);
    }

    /**
     * An associated logo.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $logo
     *
     * @return static
     *
     * @see https://schema.org/logo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * Indicates the primary entity described in some page or other
     * CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $mainEntity
     *
     * @return static
     *
     * @see https://schema.org/mainEntity
     */
    public function mainEntity($mainEntity)
    {
        return $this->setProperty('mainEntity', $mainEntity);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * A maintainer of a [[Dataset]], software package
     * ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a
     * [[Person]] or [[Organization]] that manages contributions to, and/or
     * publication of, some (typically complex) artifact. It is common for
     * distributions of software and data to be based on "upstream" sources.
     * When [[maintainer]] is applied to a specific version of something e.g. a
     * particular version or packaging of a [[Dataset]], it is always  possible
     * that the upstream source has a different maintainer. The [[isBasedOn]]
     * property can be used to indicate such relationships between datasets to
     * make the different maintenance roles clear. Similarly in the case of
     * software, a package may have dedicated maintainers working on integration
     * into software distributions such as Ubuntu, as well as upstream
     * maintainers of the underlying work.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $maintainer
     *
     * @return static
     *
     * @see https://schema.org/maintainer
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2311
     */
    public function maintainer($maintainer)
    {
        return $this->setProperty('maintainer', $maintainer);
    }

    /**
     * The manufacturer of the product.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $manufacturer
     *
     * @return static
     *
     * @see https://schema.org/manufacturer
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $material
     *
     * @return static
     *
     * @see https://schema.org/material
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * The quantity of the materials being described or an expression of the
     * physical space they occupy.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|string|string[] $materialExtent
     *
     * @return static
     *
     * @see https://schema.org/materialExtent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1759
     */
    public function materialExtent($materialExtent)
    {
        return $this->setProperty('materialExtent', $materialExtent);
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $mentions
     *
     * @return static
     *
     * @see https://schema.org/mentions
     */
    public function mentions($mentions)
    {
        return $this->setProperty('mentions', $mentions);
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which
     * data consumers need to determine whether one of several provided URLs is
     * a dedicated 'mobile site'.
     *
     * To discourage over-use, and reflecting intial usecases, the property is
     * expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The
     * general trend in web technology is towards [responsive
     * design](https://en.wikipedia.org/wiki/Responsive_web_design) in which
     * content can be flexibly adapted to a wide range of browsing environments.
     * Pages and sites referenced with the long-established [[url]] property
     * should ideally also be usable on a wide variety of devices, including
     * mobile phones. In most cases, it would be pointless and counter
     * productive to attempt to update all [[url]] markup to use [[mobileUrl]]
     * for more mobile-oriented pages. The property is intended for the case
     * when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted
     * on an additional "mobile site" alongside the main one. It should not be
     * taken as an endorsement of this publication style.
     *
     * @param string|string[] $mobileUrl
     *
     * @return static
     *
     * @see https://schema.org/mobileUrl
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3134
     */
    public function mobileUrl($mobileUrl)
    {
        return $this->setProperty('mobileUrl', $mobileUrl);
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can
     * be from an external source. It is recommended to additionally provide
     * strong product identifiers via the gtin8/gtin13/gtin14 and mpn
     * properties.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[]|string|string[] $model
     *
     * @return static
     *
     * @see https://schema.org/model
     */
    public function model($model)
    {
        return $this->setProperty('model', $model);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see https://schema.org/mpn
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Provides negative considerations regarding something, most typically in
     * pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described. Since product descriptions
     * tend to emphasise positive claims, it may be relatively unusual to find
     * [[negativeNotes]] used in this way. Nevertheless for the sake of
     * symmetry, [[negativeNotes]] can be used on [[Product]].
     *
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * negative is at the beginning of the list).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[]|\Spatie\SchemaOrg\Contracts\ListItemContract|\Spatie\SchemaOrg\Contracts\ListItemContract[]|\Spatie\SchemaOrg\Contracts\WebContentContract|\Spatie\SchemaOrg\Contracts\WebContentContract[]|string|string[] $negativeNotes
     *
     * @return static
     *
     * @see https://schema.org/negativeNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function negativeNotes($negativeNotes)
    {
        return $this->setProperty('negativeNotes', $negativeNotes);
    }

    /**
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a
     * [[Product]].
     *
     * @param string|string[] $nsn
     *
     * @return static
     *
     * @see https://schema.org/nsn
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2126
     */
    public function nsn($nsn)
    {
        return $this->setProperty('nsn', $nsn);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to
     * describe a [[Demand]]. While this property is listed as expected on a
     * number of common types, it can be used in others. In that case, using a
     * second type, such as Product or a subtype of Product, can clarify the
     * nature of the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[]|\Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $offers
     *
     * @return static
     *
     * @see https://schema.org/offers
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped',
     * 'Canadian flag'. Values are typically expressed as text, although links
     * to controlled value schemes are also supported.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $pattern
     *
     * @return static
     *
     * @see https://schema.org/pattern
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function pattern($pattern)
    {
        return $this->setProperty('pattern', $pattern);
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     * @param int|int[]|string|string[] $position
     *
     * @return static
     *
     * @see https://schema.org/position
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
    }

    /**
     * Provides positive considerations regarding something, for example product
     * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described.
     *
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * positive is at the beginning of the list).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[]|\Spatie\SchemaOrg\Contracts\ListItemContract|\Spatie\SchemaOrg\Contracts\ListItemContract[]|\Spatie\SchemaOrg\Contracts\WebContentContract|\Spatie\SchemaOrg\Contracts\WebContentContract[]|string|string[] $positiveNotes
     *
     * @return static
     *
     * @see https://schema.org/positiveNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function positiveNotes($positiveNotes)
    {
        return $this->setProperty('positiveNotes', $positiveNotes);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The person or organization who produced the work (e.g. music album,
     * movie, TV/radio series etc.).
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $producer
     *
     * @return static
     *
     * @see https://schema.org/producer
     */
    public function producer($producer)
    {
        return $this->setProperty('producer', $producer);
    }

    /**
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param string|string[] $productID
     *
     * @return static
     *
     * @see https://schema.org/productID
     */
    public function productID($productID)
    {
        return $this->setProperty('productID', $productID);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $productionDate
     *
     * @return static
     *
     * @see https://schema.org/productionDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $provider
     *
     * @return static
     *
     * @see https://schema.org/provider
     * @see https://pending.schema.org
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * A publication event associated with the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\PublicationEventContract|\Spatie\SchemaOrg\Contracts\PublicationEventContract[] $publication
     *
     * @return static
     *
     * @see https://schema.org/publication
     */
    public function publication($publication)
    {
        return $this->setProperty('publication', $publication);
    }

    /**
     * The publisher of the creative work.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $publisher
     *
     * @return static
     *
     * @see https://schema.org/publisher
     */
    public function publisher($publisher)
    {
        return $this->setProperty('publisher', $publisher);
    }

    /**
     * The publishing division which published the comic.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $publisherImprint
     *
     * @return static
     *
     * @see https://schema.org/publisherImprint
     * @see https://bib.schema.org
     */
    public function publisherImprint($publisherImprint)
    {
        return $this->setProperty('publisherImprint', $publisherImprint);
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual, e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When
     * applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are
     * those of the party primarily responsible for the creation of the
     * [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see https://schema.org/publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $purchaseDate
     *
     * @return static
     *
     * @see https://schema.org/purchaseDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may
     * capture all or part of the event.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $recordedAt
     *
     * @return static
     *
     * @see https://schema.org/recordedAt
     */
    public function recordedAt($recordedAt)
    {
        return $this->setProperty('recordedAt', $recordedAt);
    }

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $releaseDate
     *
     * @return static
     *
     * @see https://schema.org/releaseDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function releaseDate($releaseDate)
    {
        return $this->setProperty('releaseDate', $releaseDate);
    }

    /**
     * The place and time the release was issued, expressed as a
     * PublicationEvent.
     *
     * @param \Spatie\SchemaOrg\Contracts\PublicationEventContract|\Spatie\SchemaOrg\Contracts\PublicationEventContract[] $releasedEvent
     *
     * @return static
     *
     * @see https://schema.org/releasedEvent
     */
    public function releasedEvent($releasedEvent)
    {
        return $this->setProperty('releasedEvent', $releasedEvent);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $review
     *
     * @return static
     *
     * @see https://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $reviews
     *
     * @return static
     *
     * @see https://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in
     * some CreativeWork. This property was created primarily to
     *     indicate the use of a specific schema.org release, e.g. ```10.0``` as
     * a simple string, or more explicitly via URL,
     * ```https://schema.org/docs/releases.html#v10.0```. There may be
     * situations in which other schemas might usefully be referenced this way,
     * e.g.
     * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/```
     * but this has not been carefully explored in the community.
     *
     * @param string|string[] $schemaVersion
     *
     * @return static
     *
     * @see https://schema.org/schemaVersion
     */
    public function schemaVersion($schemaVersion)
    {
        return $this->setProperty('schemaVersion', $schemaVersion);
    }

    /**
     * Indicates the date on which the current structured data was generated /
     * published. Typically used alongside [[sdPublisher]]
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $sdDatePublished
     *
     * @return static
     *
     * @see https://schema.org/sdDatePublished
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdDatePublished($sdDatePublished)
    {
        return $this->setProperty('sdDatePublished', $sdDatePublished);
    }

    /**
     * A license document that applies to this structured data, typically
     * indicated by URL.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $sdLicense
     *
     * @return static
     *
     * @see https://schema.org/sdLicense
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdLicense($sdLicense)
    {
        return $this->setProperty('sdLicense', $sdLicense);
    }

    /**
     * Indicates the party responsible for generating and publishing the current
     * structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a
     * different site. For example, student projects and open data initiatives
     * often re-publish existing content with more explicitly structured
     * metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sdPublisher
     *
     * @return static
     *
     * @see https://schema.org/sdPublisher
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdPublisher($sdPublisher)
    {
        return $this->setProperty('sdPublisher', $sdPublisher);
    }

    /**
     * A standardized size of a product or creative work, specified either
     * through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured
     * [[SizeSpecification]]; in other cases, the [[width]], [[height]],
     * [[depth]] and [[weight]] properties may be more applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract[]|string|string[] $size
     *
     * @return static
     *
     * @see https://schema.org/size
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function size($size)
    {
        return $this->setProperty('size', $size);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see https://schema.org/sku
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param string|string[] $slogan
     *
     * @return static
     *
     * @see https://schema.org/slogan
     */
    public function slogan($slogan)
    {
        return $this->setProperty('slogan', $slogan);
    }

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $sourceOrganization
     *
     * @return static
     *
     * @see https://schema.org/sourceOrganization
     */
    public function sourceOrganization($sourceOrganization)
    {
        return $this->setProperty('sourceOrganization', $sourceOrganization);
    }

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are
     * not known to be appropriate.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $spatial
     *
     * @return static
     *
     * @see https://schema.org/spatial
     */
    public function spatial($spatial)
    {
        return $this->setProperty('spatial', $spatial);
    }

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are
     * the focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather
     * would have spatialCoverage which was the place: the state of New York.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $spatialCoverage
     *
     * @return static
     *
     * @see https://schema.org/spatialCoverage
     */
    public function spatialCoverage($spatialCoverage)
    {
        return $this->setProperty('spatialCoverage', $spatialCoverage);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. E.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sponsor
     *
     * @return static
     *
     * @see https://schema.org/sponsor
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * The item being described is intended to help a person learn the
     * competency or learning outcome defined by the referenced term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $teaches
     *
     * @return static
     *
     * @see https://schema.org/teaches
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2427
     */
    public function teaches($teaches)
    {
        return $this->setProperty('teaches', $teaches);
    }

    /**
     * The "temporal" property can be used in cases where more specific
     * properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
     * [[datePublished]]) are not known to be appropriate.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $temporal
     *
     * @return static
     *
     * @see https://schema.org/temporal
     */
    public function temporal($temporal)
    {
        return $this->setProperty('temporal', $temporal);
    }

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the
     * content applies to, i.e. that it describes, either as a DateTime or as a
     * textual string indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time
     * period in a precise notation (e.g. for a 2011 census dataset, the year
     * 2011 would be written "2011/2012"). Other forms of content, e.g.
     * ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their
     * temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal
     * coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601
     * interval format format via "1939/1945".
     *
     * Open-ended date ranges can be written with ".." in place of the end date.
     * For example, "2015-11/.." indicates a range beginning in November 2015
     * and with no specified final date. This is tentative and might be updated
     * in future when ISO 8601 is officially updated.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $temporalCoverage
     *
     * @return static
     *
     * @see https://schema.org/temporalCoverage
     */
    public function temporalCoverage($temporalCoverage)
    {
        return $this->setProperty('temporalCoverage', $temporalCoverage);
    }

    /**
     * The textual content of this CreativeWork.
     *
     * @param string|string[] $text
     *
     * @return static
     *
     * @see https://schema.org/text
     */
    public function text($text)
    {
        return $this->setProperty('text', $text);
    }

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @param string|string[] $thumbnailUrl
     *
     * @return static
     *
     * @see https://schema.org/thumbnailUrl
     */
    public function thumbnailUrl($thumbnailUrl)
    {
        return $this->setProperty('thumbnailUrl', $thumbnailUrl);
    }

    /**
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g. 'PT30M',
     * 'PT1H25M'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[] $timeRequired
     *
     * @return static
     *
     * @see https://schema.org/timeRequired
     */
    public function timeRequired($timeRequired)
    {
        return $this->setProperty('timeRequired', $timeRequired);
    }

    /**
     * The work that this work has been translated from. E.g. 物种起源 is a
     * translationOf “On the Origin of Species”.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $translationOfWork
     *
     * @return static
     *
     * @see https://schema.org/translationOfWork
     * @see https://bib.schema.org
     */
    public function translationOfWork($translationOfWork)
    {
        return $this->setProperty('translationOfWork', $translationOfWork);
    }

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or
     * that translates during some event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $translator
     *
     * @return static
     *
     * @see https://schema.org/translator
     */
    public function translator($translator)
    {
        return $this->setProperty('translator', $translator);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string|string[] $typicalAgeRange
     *
     * @return static
     *
     * @see https://schema.org/typicalAgeRange
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

    /**
     * The schema.org [[usageInfo]] property indicates further information about
     * a [[CreativeWork]]. This property is applicable both to works that are
     * freely available and to those that require payment or other transactions.
     * It can reference additional information, e.g. community expectations on
     * preferred linking and citation conventions, as well as purchasing
     * details. For something that can be commercially licensed, usageInfo can
     * provide detailed, resource-specific information about licensing options.
     *
     * This property can be used alongside the license property which indicates
     * license(s) applicable to some piece of content. The usageInfo property
     * can provide information about other licensing options, e.g. acquiring
     * commercial usage rights for an image that is also available under
     * non-commercial creative commons licenses.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $usageInfo
     *
     * @return static
     *
     * @see https://schema.org/usageInfo
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2454
     */
    public function usageInfo($usageInfo)
    {
        return $this->setProperty('usageInfo', $usageInfo);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param float|float[]|int|int[]|string|string[] $version
     *
     * @return static
     *
     * @see https://schema.org/version
     */
    public function version($version)
    {
        return $this->setProperty('version', $version);
    }

    /**
     * An embedded video object.
     *
     * @param \Spatie\SchemaOrg\Contracts\ClipContract|\Spatie\SchemaOrg\Contracts\ClipContract[]|\Spatie\SchemaOrg\Contracts\VideoObjectContract|\Spatie\SchemaOrg\Contracts\VideoObjectContract[] $video
     *
     * @return static
     *
     * @see https://schema.org/video
     */
    public function video($video)
    {
        return $this->setProperty('video', $video);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see https://schema.org/weight
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The width of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $width
     *
     * @return static
     *
     * @see https://schema.org/width
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative
     * work. E.g. the paperback edition, first edition, or e-book.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workExample
     *
     * @return static
     *
     * @see https://schema.org/workExample
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function workExample($workExample)
    {
        return $this->setProperty('workExample', $workExample);
    }

    /**
     * A work that is a translation of the content of this work. E.g. 西遊記
     * has an English workTranslation “Journey to the West”, a German
     * workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation
     * Tây du ký bình khảo.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workTranslation
     *
     * @return static
     *
     * @see https://schema.org/workTranslation
     * @see https://bib.schema.org
     */
    public function workTranslation($workTranslation)
    {
        return $this->setProperty('workTranslation', $workTranslation);
    }
}
