<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Account
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $account_type
 * @property array|null $account_details
 * @property int $status
 * @property int $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereAccountDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUserId($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Activation
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property int $completed
 * @property string|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Activation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereUserId($value)
 */
	class Activation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Addon
 *
 * @property int $id
 * @property string $name
 * @property string $addon_identifier
 * @property string|null $purchase_code
 * @property string|null $version
 * @property int $status
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AddonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereAddonIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon wherePurchaseCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereVersion($value)
 */
	class Addon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int|null $personal_number
 * @property string $email
 * @property string|null $phone_no
 * @property string $address
 * @property array|null $address_ids
 * @property string|null $country
 * @property string|null $state
 * @property string|null $city
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $postal_code
 * @property int $default_shipping 1 = default
 * @property int $default_billing 1 = default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\AddressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDefaultBilling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDefaultShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Affiliate
 *
 * @property int $id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliate whereUpdatedAt($value)
 */
	class Affiliate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AffiliateOptions
 *
 * @property int $id
 * @property string|null $type
 * @property string $status
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions query()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateOptions whereUpdatedAt($value)
 */
	class AffiliateOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AffiliateStates
 *
 * @property int $id
 * @property int $affiliate_user_id
 * @property int $no_of_click
 * @property int $no_of_order_item
 * @property int $no_of_delivered
 * @property int $no_of_cancel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates query()
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereAffiliateUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereNoOfCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereNoOfClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereNoOfDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereNoOfOrderItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AffiliateStates whereUpdatedAt($value)
 */
	class AffiliateStates extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApiKey
 *
 * @property int $id
 * @property int $user_id
 * @property string $key
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApiKeyLanguage> $apiKeyLanguages
 * @property-read int|null $api_key_languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKey whereUserId($value)
 */
	class ApiKey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ApiKeyLanguage
 *
 * @property int $id
 * @property int $api_key_id
 * @property string $lang
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereApiKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiKeyLanguage whereUpdatedAt($value)
 */
	class ApiKeyLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppIntro
 *
 * @property int $id
 * @property int $status
 * @property int|null $image_id
 * @property array|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AppIntroLanguage> $appIntroLanguage
 * @property-read int|null $app_intro_language_count
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntro whereUpdatedAt($value)
 */
	class AppIntro extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppIntroLanguage
 *
 * @property int $id
 * @property string $title
 * @property string $order
 * @property string $lang our default locale for system en
 * @property int $app_intro_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AppIntro|null $appIntro
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereAppIntroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppIntroLanguage whereUpdatedAt($value)
 */
	class AppIntroLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeLanguage> $attributeLanguage
 * @property-read int|null $attribute_language_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeValues> $attributeValue
 * @property-read int|null $attribute_value_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $title
 * @property-read mixed $translate
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeLanguage
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $lang
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attribute|null $attribute
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeLanguage whereUpdatedAt($value)
 */
	class AttributeLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeValues
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attribute|null $attribute
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValues whereValue($value)
 */
	class AttributeValues extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property int $order
 * @property string $link
 * @property string $status
 * @property int|null $image_id
 * @property array|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property int|null $image_id
 * @property array|null $image
 * @property int|null $banner_id
 * @property array|null $banner
 * @property string $status
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogComment> $blogComments
 * @property-read int|null $blog_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogLanguage> $blogLanguages
 * @property-read int|null $blog_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogView> $blogViews
 * @property-read int|null $blog_views_count
 * @property-read \App\Models\BlogCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $banner_img
 * @property-read mixed $description
 * @property-read mixed $published_date
 * @property-read mixed $recent_post_image
 * @property-read mixed $short_description
 * @property-read mixed $tags
 * @property-read mixed $thumbnail
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\BlogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withoutTrashed()
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCategory
 *
 * @property int $id
 * @property string $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogCategoryLanguage> $categoryLanguages
 * @property-read int|null $category_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogCategoryLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $title
 * @property-read mixed $translate
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereUpdatedAt($value)
 */
	class BlogCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCategoryLanguage
 *
 * @property int $id
 * @property int $blog_category_id
 * @property string $lang our default locale for system en
 * @property string|null $title
 * @property string|null $meta_title
 * @property string|null $meta_description meta description for seo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BlogCategory|null $blogCategory
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereBlogCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategoryLanguage whereUpdatedAt($value)
 */
	class BlogCategoryLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogComment
 *
 * @property int $id
 * @property int|null $user_id used like when user is logged in
 * @property int $blog_id
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogCommentLike> $commentLikes
 * @property-read int|null $comment_likes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogCommentReply> $commentReplies
 * @property-read int|null $comment_replies_count
 * @property-read mixed $comment_date
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereUserId($value)
 */
	class BlogComment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCommentLike
 *
 * @property int $id
 * @property int $user_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentLike whereUserId($value)
 */
	class BlogCommentLike extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCommentReply
 *
 * @property int $id
 * @property int|null $user_id used like when user is logged in
 * @property int $blog_comment_id
 * @property int|null $parent_id
 * @property string|null $comment
 * @property int $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogCommentLike> $commentLikes
 * @property-read int|null $comment_likes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, BlogCommentReply> $commentReplies
 * @property-read int|null $comment_replies_count
 * @property-read mixed $reply_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, BlogCommentReply> $replies
 * @property-read int|null $replies_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereBlogCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCommentReply whereUserId($value)
 */
	class BlogCommentReply extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogLanguage
 *
 * @property int $id
 * @property int $blog_id
 * @property string $lang our default locale for system en
 * @property string $title
 * @property string|null $short_description
 * @property string|null $long_description
 * @property string|null $tags
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @method static \Database\Factories\BlogLanguageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereMetaKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogLanguage whereUpdatedAt($value)
 */
	class BlogLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogView
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $blog_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereUserId($value)
 */
	class BlogView extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $slug
 * @property int $status
 * @property int|null $logo_id
 * @property array|null $logo
 * @property int|null $banner_id
 * @property array|null $banner
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BrandLanguage> $brandLanguages
 * @property-read int|null $brand_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BrandLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $head_description
 * @property-read mixed $head_title
 * @property-read mixed $image130x93
 * @property-read mixed $image835x200
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Brand active()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereLogoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BrandLanguage
 *
 * @property int $id
 * @property int $brand_id
 * @property string $lang our default locale for system en
 * @property string|null $title
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandLanguage whereUpdatedAt($value)
 */
	class BrandLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Campaign
 *
 * @property int $id
 * @property string $slug
 * @property string|null $background_color
 * @property string|null $text_color
 * @property int|null $banner_id
 * @property array|null $banner
 * @property array|null $thumbnail
 * @property int|null $thumbnail_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int $status
 * @property int $featured
 * @property int $flash_sale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CampaignLanguage> $campaignLanguages
 * @property-read int|null $campaign_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CampaignProduct> $campaignProducts
 * @property-read int|null $campaign_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CampaignLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read string $campaign_end_date
 * @property-read string $campaign_start_date
 * @property-read mixed $image1920x412
 * @property-read mixed $image374x374
 * @property-read mixed $image406x235
 * @property-read mixed $short_description
 * @property-read mixed $title
 * @property-read mixed $translate
 * @method static \Database\Factories\CampaignFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign query()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereBackgroundColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereFlashSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereTextColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereThumbnailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereUpdatedAt($value)
 */
	class Campaign extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CampaignLanguage
 *
 * @property int $id
 * @property int $campaign_id
 * @property string $lang
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Campaign|null $campaign
 * @method static \Database\Factories\CampaignLanguageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignLanguage whereUpdatedAt($value)
 */
	class CampaignLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CampaignProduct
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $campaign_id
 * @property int $product_id
 * @property string $status
 * @property float|null $discount
 * @property string|null $discount_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Campaign|null $campaign
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CampaignProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereUserId($value)
 */
	class CampaignProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CampaignRequest
 *
 * @property int $id
 * @property int $product_id
 * @property int $campaign_id
 * @property int $user_id
 * @property float $discount
 * @property string|null $discount_type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Campaign|null $campaign
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CampaignRequestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignRequest whereUserId($value)
 */
	class CampaignRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int|null $user_id
 * @property string|null $guest_id
 * @property int|null $product_id
 * @property string|null $variant
 * @property int|null $quantity
 * @property float|null $price
 * @property float|null $discount
 * @property float|null $tax
 * @property float|null $shipping_cost
 * @property string|null $shipping_type
 * @property int|null $coupon_applied
 * @property float|null $coupon_discount
 * @property string|null $trx_id
 * @property string|null $product_referral_code
 * @property int|null $is_buy_now
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $current_stock
 * @property-read mixed $image40x40
 * @property-read mixed $image72x72
 * @property-read mixed $min_quantity
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\SellerProfile|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCouponApplied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereGuestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereIsBuyNow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereProductReferralCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereShippingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereTrxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereVariant($value)
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $position
 * @property int $ordering
 * @property string $slug
 * @property float|null $commission
 * @property int $is_featured
 * @property int $status
 * @property string|null $icon
 * @property int|null $logo_id
 * @property array|null $logo
 * @property int|null $banner_id
 * @property array|null $banner
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attribute> $attributes
 * @property-read int|null $attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CategoryLanguage> $categoryLanguage
 * @property-read int|null $category_language_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $childCategories
 * @property-read int|null $child_categories_count
 * @property-read mixed $all_popular_image
 * @property-read mixed $image
 * @property-read mixed $popular_banner
 * @property-read mixed $popular_image
 * @property-read mixed $title
 * @property-read mixed $top_image
 * @property-read \App\Models\Product|null $latestProduct
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category language($lang)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLogoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereOrdering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CategoryLanguage
 *
 * @property int $id
 * @property int $category_id
 * @property string $lang our default locale for system en
 * @property string|null $title
 * @property string|null $meta_title
 * @property string|null $meta_description meta description for seo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryLanguage whereUpdatedAt($value)
 */
	class CategoryLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChatRoom
 *
 * @property-read \App\Models\Message|null $lastMessage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \App\Models\User|null $receiver
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom accepted()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom query()
 */
	class ChatRoom extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Checkout
 *
 * @property int $id
 * @property int $user_id
 * @property int $seller_id
 * @property int|null $coupon_id
 * @property string|null $trx_id
 * @property float|null $coupon_discount
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \App\Models\SellerProfile|null $seller
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout query()
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereTrxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Checkout whereUserId($value)
 */
	class Checkout extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property int $state_id
 * @property int $country_id
 * @property float|null $cost
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassCity
 *
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\ShippingClass|null $shippingClass
 * @method static \Illuminate\Database\Eloquent\Builder|ClassCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassCity query()
 */
	class ClassCity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Color
 *
 * @property int $id
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ColorLanguage> $colorLanguages
 * @property-read int|null $color_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ColorLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $name
 * @property-read mixed $translate
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 */
	class Color extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ColorLanguage
 *
 * @property int $id
 * @property string $name
 * @property int $color_id
 * @property string $lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Color|null $color
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ColorLanguage whereUpdatedAt($value)
 */
	class ColorLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CommissionHistory
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $order_detail_id
 * @property int|null $seller_id
 * @property float|null $admin_commission
 * @property float|null $seller_earning
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\OrderDetail|null $orderDetails
 * @property-read \App\Models\SellerProfile|null $sellerProfile
 * @method static \Database\Factories\CommissionHistoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereAdminCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereOrderDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereSellerEarning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissionHistory whereUpdatedAt($value)
 */
	class CommissionHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompareProduct
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cart|null $cart
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompareProduct whereUserId($value)
 */
	class CompareProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactUs
 *
 * @property int $id
 * @property int|null $seller_id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property string|null $reply
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereUpdatedAt($value)
 */
	class ContactUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string|null $iso3
 * @property string|null $iso2
 * @property string|null $phonecode
 * @property string|null $currency
 * @property string|null $currency_symbol
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\FlagIcon|null $flag
 * @property-read mixed $flag_icon
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\State> $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property int|null $user_id if none or 1 then own else sellers
 * @property string $type
 * @property string $code
 * @property int|null $banner_id
 * @property array|null $banner
 * @property float|null $minimum_shopping
 * @property float|null $maximum_discount
 * @property array|null $product_id
 * @property string|null $discount_type
 * @property float|null $discount
 * @property int $status
 * @property string|null $start_date
 * @property string|null $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CouponLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $image145x110
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CouponLanguage> $languages
 * @property-read int|null $languages_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CouponFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMaximumDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinimumShopping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUserId($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CouponLanguage
 *
 * @property int $id
 * @property int $coupon_id
 * @property string $lang
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Coupon|null $coupon
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponLanguage whereUpdatedAt($value)
 */
	class CouponLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CourierCity
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CourierCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierCity query()
 */
	class CourierCity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $code
 * @property float|null $exchange_rate
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryHero
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $pickup_hub_id
 * @property string|null $driving_licence
 * @property array|null $driving_licence_image
 * @property float|null $salary
 * @property float|null $commission
 * @property float|null $total_commission
 * @property float|null $total_collection
 * @property float|null $total_paid
 * @property int|null $country_id
 * @property int|null $state_id
 * @property int|null $city_id
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DeliveryHeroAccount> $heroAccount
 * @property-read int|null $hero_account_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\PickupHub|null $pickupHub
 * @property-read \App\Models\State|null $state
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\DeliveryHeroFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereDrivingLicence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereDrivingLicenceImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero wherePickupHubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereTotalCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereTotalCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereTotalPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHero whereUserId($value)
 */
	class DeliveryHero extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryHeroAccount
 *
 * @property int $id
 * @property int|null $user_id processed by user
 * @property int|null $order_id
 * @property int|null $delivery_hero_id
 * @property string $source
 * @property string $type income means in, expense means out
 * @property float|null $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DeliveryHero|null $deliveryHero
 * @property-read \App\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereDeliveryHeroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHeroAccount whereUserId($value)
 */
	class DeliveryHeroAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryHistory
 *
 * @property int $id
 * @property int $order_id
 * @property int|null $user_id
 * @property int|null $delivery_hero_id
 * @property string $event
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DeliveryHero|null $deliveryHero
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereDeliveryHeroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryHistory whereUserId($value)
 */
	class DeliveryHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FlagIcon
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlagIcon whereUpdatedAt($value)
 */
	class FlagIcon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Font
 *
 * @property int $id
 * @property string $title
 * @property string $regular
 * @property string $medium
 * @property string $bold
 * @property int $status
 * @property string $local
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Font newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Font newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Font query()
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereBold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereRegular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Font whereUpdatedAt($value)
 */
	class Font extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string $locale
 * @property int $status
 * @property string|null $flag
 * @property string|null $text_direction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $flag_image
 * @property-read \App\Models\LanguageConfig|null $languageConfig
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereTextDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LanguageConfig
 *
 * @property int $id
 * @property int $language_id
 * @property string $name
 * @property string|null $script
 * @property string|null $native
 * @property string|null $regional
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig query()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereNative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereRegional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereScript($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageConfig whereUpdatedAt($value)
 */
	class LanguageConfig extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LogActivity
 *
 * @property int $id
 * @property string $url
 * @property string $method
 * @property string $ip
 * @property string|null $browser
 * @property string|null $platform
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUserId($value)
 */
	class LogActivity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Media
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $user_id
 * @property string $storage
 * @property string|null $type
 * @property string|null $extension
 * @property int|null $size
 * @property string|null $original_file
 * @property array|null $image_variants
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereImageVariants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereOriginalFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property-read \App\Models\ChatRoom|null $chatRoom
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message receiver()
 * @method static \Illuminate\Database\Eloquent\Builder|Message seen()
 * @method static \Illuminate\Database\Eloquent\Builder|Message sender()
 * @method static \Illuminate\Database\Eloquent\Builder|Message unseen()
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $details
 * @property string|null $url
 * @property string $status seen/unseen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $date
 * @property-read string $time
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OfflineMethod
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OfflineMethodLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $image
 * @property-read mixed $instructions
 * @property-read mixed $name
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OfflineMethodLanguage> $languages
 * @property-read int|null $languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethod query()
 */
	class OfflineMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OfflineMethodLanguage
 *
 * @property-read \App\Models\OfflineMethod|null $offlineMethod
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethodLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethodLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfflineMethodLanguage query()
 */
	class OfflineMethodLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $seller_id seller user id
 * @property int|null $user_id customer
 * @property int|null $gg_order_id
 * @property int|null $gg_status
 * @property int|null $delivery_hero_id from delivery hero table
 * @property array|null $billing_address
 * @property array|null $shipping_address
 * @property string $delivery_status
 * @property string|null $payment_type
 * @property string $payment_status
 * @property array|null $payment_details
 * @property float|null $sub_total
 * @property float|null $discount
 * @property float|null $coupon_discount
 * @property float|null $total_tax
 * @property float|null $total_amount
 * @property float|null $shipping_cost
 * @property float|null $total_payable
 * @property string|null $code
 * @property string|null $date
 * @property int $viewed
 * @property int $delivery_viewed
 * @property int $payment_status_viewed
 * @property int $commission_calculated
 * @property string|null $is_cancelled
 * @property string|null $is_deleted
 * @property string $trx_id
 * @property int $is_mailed
 * @property string|null $offline_method_id
 * @property array|null $offline_method_file
 * @property int $status
 * @property int|null $pickup_hub_id
 * @property int $cancel_request
 * @property string|null $cancel_request_at
 * @property string|null $delivery_hero_assign_at
 * @property int|null $created_by
 * @property int $is_draft
 * @property string|null $shipping_method
 * @property int|null $is_coupon_system_active
 * @property array $tax_method
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\DeliveryHistory|null $deliveredAt
 * @property-read \App\Models\DeliveryHero|null $deliveryHero
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DeliveryHistory> $deliveryHistories
 * @property-read int|null $delivery_histories_count
 * @property-read mixed $delivered_days
 * @property-read string $order_date
 * @property-read mixed $total_order_quantity
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderDetail> $orderDetails
 * @property-read int|null $order_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PaymentHistory> $paymentHistories
 * @property-read int|null $payment_histories_count
 * @property-read \App\Models\PickupHub|null $pickupHub
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Refund> $processedRefunds
 * @property-read int|null $processed_refunds_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Refund> $refunds
 * @property-read int|null $refunds_count
 * @property-read \App\Models\User|null $seller
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Refund> $totalRefunded
 * @property-read int|null $total_refunded_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCancelRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCancelRequestAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCommissionCalculated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryHeroAssignAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryHeroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGgOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGgStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsCouponSystemActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsMailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOfflineMethodFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOfflineMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatusViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePickupHubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTaxMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalPayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTrxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereViewed($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderDetail
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int|null $tr_tracking
 * @property string|null $variation
 * @property float|null $price
 * @property float|null $tax
 * @property float|null $discount
 * @property array|null $coupon_discount will be json data {"coupon_code" : "BLACK5", "discount" : 5}
 * @property array|null $shipping_cost will be json data {"type" : "flat","depend_on_quantity" : true, "per_cost" : 10}
 * @property int $quantity
 * @property int|null $pickup_hub_id
 * @property string|null $product_referral_code
 * @property int $is_refundable 1 => can be refunded
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Refund|null $refund
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductStock> $stocks
 * @property-read int|null $stocks_count
 * @method static \Database\Factories\OrderDetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereIsRefundable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail wherePickupHubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereProductReferralCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereTrTracking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereVariation($value)
 */
	class OrderDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $type
 * @property string|null $link
 * @property int $status
 * @property string|null $content
 * @property string|null $email
 * @property string|null $optional_email
 * @property string|null $phone
 * @property string|null $optional_phone
 * @property array|null $meta_image
 * @property int|null $meta_image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PageLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $address
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PageLanguage> $pageLanguage
 * @property-read int|null $page_language_count
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereMetaImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereMetaImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereOptionalEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereOptionalPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PageLanguage
 *
 * @property int $id
 * @property int $page_id
 * @property string $lang our default locale for system en
 * @property string|null $title
 * @property string|null $address
 * @property string|null $content
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Page|null $page
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageLanguage whereUpdatedAt($value)
 */
	class PageLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordRequest
 *
 * @property int $id
 * @property int $user_id
 * @property int $otp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordRequest whereUserId($value)
 */
	class PasswordRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentHistory
 *
 * @property int $id
 * @property int $order_id
 * @property int|null $user_id
 * @property string $event
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentHistory whereUserId($value)
 */
	class PaymentHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $attribute
 * @property array $keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PickupHub
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $phone
 * @property int $pick_up_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $address
 * @property-read mixed $name
 * @property-read mixed $translate
 * @property-read \App\Models\User $incharge
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PickupHubLanguage> $pickupHubLanuages
 * @property-read int|null $pickup_hub_lanuages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\PickupHubFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub query()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub wherePickUpStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHub whereUserId($value)
 */
	class PickupHub extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PickupHubLanguage
 *
 * @property int $id
 * @property int $pickup_hub_id
 * @property string $name
 * @property string $address
 * @property string $lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PickupHub|null $pickupHub
 * @method static \Database\Factories\PickupHubLanguageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage wherePickupHubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PickupHubLanguage whereUpdatedAt($value)
 */
	class PickupHubLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Plugin
 *
 * @property int $id
 * @property string $name
 * @property string|null $domain
 * @property string|null $author
 * @property string|null $author_url
 * @property string|null $image
 * @property string|null $description
 * @property string|null $tags
 * @property string $plugin_identifier
 * @property string $directory
 * @property string|null $purchase_code
 * @property string $version
 * @property string $required_cms_version
 * @property int $status
 * @property string|null $license
 * @property string|null $license_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereAuthorUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereLicenseUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin wherePluginIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin wherePurchaseCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereRequiredCmsVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plugin whereVersion($value)
 */
	class Plugin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int|null $brand_id
 * @property int|null $category_id
 * @property int|null $user_id if none or 1 then own else sellers
 * @property int $created_by
 * @property string $slug
 * @property float|null $price
 * @property float|null $special_discount
 * @property string|null $special_discount_type
 * @property string|null $special_discount_start
 * @property string|null $special_discount_end
 * @property float|null $purchase_cost
 * @property string|null $barcode
 * @property string|null $video_provider
 * @property string|null $video_url
 * @property array|null $colors
 * @property array|null $attribute_sets
 * @property string|null $vat_taxes
 * @property int $has_variant
 * @property array|null $selected_variants
 * @property array|null $selected_variants_ids
 * @property array|null $thumbnail
 * @property array|null $images
 * @property array|null $description_images
 * @property string|null $thumbnail_id
 * @property string|null $image_ids
 * @property int $current_stock
 * @property int $minimum_order_quantity
 * @property int $stock_notification
 * @property int|null $low_stock_to_notify
 * @property string $stock_visibility
 * @property int $total_sale
 * @property string $status
 * @property int $is_approved use for seller product approval purpose
 * @property int $is_catalog if 1 can't added to cart only view
 * @property string|null $external_link
 * @property int $is_featured
 * @property int $is_classified
 * @property int $is_wholesale
 * @property array|null $contact_info
 * @property int $is_digital
 * @property int $is_refundable
 * @property int $todays_deal
 * @property float $rating
 * @property int $viewed total views of the product
 * @property string|null $shipping_type
 * @property float|null $shipping_fee
 * @property int $shipping_fee_depend_on_quantity
 * @property string|null $estimated_shipping_days estimated time of delivering the product
 * @property int $cash_on_delivery 0 not available, 1 available
 * @property array|null $meta_image
 * @property array|null $product_file
 * @property int|null $product_file_id
 * @property string|null $meta_image_id
 * @property float|null $reward
 * @property int $is_deleted
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\CampaignProduct|null $campaign
 * @property-read \App\Models\CampaignProduct|null $campaingProduct
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cart> $cart
 * @property-read int|null $cart_count
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\User|null $createdBy
 * @property-read \App\Models\ProductStock|null $firstStock
 * @property-read mixed $discount_percentage
 * @property-read mixed $image110x122
 * @property-read mixed $image190x230
 * @property-read mixed $image40x40
 * @property-read mixed $image72x72
 * @property-read mixed $product_meta_title
 * @property-read mixed $product_name
 * @property-read mixed $special_discount_check
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderDetail> $monthlyOrders
 * @property-read int|null $monthly_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderDetail> $orderDetails
 * @property-read int|null $order_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderDetail> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductLanguage> $productLanguages
 * @property-read int|null $product_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Review> $reviews
 * @property-read int|null $reviews_count
 * @property-read \App\Models\SellerProfile|null $sellerProfile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductStock> $stock
 * @property-read int|null $stock_count
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\CompareProduct|null $userCompare
 * @property-read \App\Models\Review|null $userReview
 * @property-read \App\Models\Wishlist|null $userWishlist
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductView> $viewedProducts
 * @property-read int|null $viewed_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product checkSellerSystem()
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product isStockOut()
 * @method static \Illuminate\Database\Eloquent\Builder|Product isWholesale()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product productPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Product profileCheck()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product userCheck()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAttributeSets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCashOnDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereContactInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCurrentStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescriptionImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereEstimatedShippingDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereExternalLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHasVariant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsCatalog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsClassified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsDigital($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsRefundable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsWholesale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLowStockToNotify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMinimumOrderQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePurchaseCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSelectedVariants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSelectedVariantsIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShippingFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShippingFeeDependOnQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShippingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSpecialDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSpecialDiscountEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSpecialDiscountStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSpecialDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereThumbnailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTodaysDeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTotalSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVatTaxes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVideoProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVideoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductLanguage
 *
 * @property int $id
 * @property int $product_id
 * @property string $lang
 * @property string $name
 * @property string|null $short_description
 * @property string|null $description
 * @property int|null $pdf_specification_id
 * @property array|null $pdf_specification
 * @property string|null $tags
 * @property string|null $unit
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $specification
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\CampaignProduct|null $productCampaign
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductVatTax> $productVatTax
 * @property-read int|null $product_vat_tax_count
 * @method static \Database\Factories\ProductLanguageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage wherePdfSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage wherePdfSpecificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductLanguage whereUpdatedAt($value)
 */
	class ProductLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductStock
 *
 * @property int $id
 * @property string|null $variant_ids first one is color,rest is attribute values
 * @property int $product_id
 * @property string|null $name auto generated by attributes and colors
 * @property string|null $sku
 * @property int $current_stock
 * @property float|null $price
 * @property array|null $image
 * @property int|null $image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CampaignProduct|null $campaingProduct
 * @property-read mixed $discount_percentage
 * @property-read mixed $image190x230
 * @property-read mixed $stock_image
 * @property-read \App\Models\Product|null $product
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\WholesalePrice> $wholeSalePrice
 * @property-read int|null $whole_sale_price_count
 * @method static \Database\Factories\ProductStockFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereCurrentStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductStock whereVariantIds($value)
 */
	class ProductStock extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductVatTax
 *
 * @property int $id
 * @property int $product_id
 * @property int $vat_tax_id
 * @property float|null $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVatTax whereVatTaxId($value)
 */
	class ProductVatTax extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductView
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereUserId($value)
 */
	class ProductView extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Refund
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $order_id
 * @property int|null $order_detail_id
 * @property int|null $seller_id
 * @property int|null $processed_by
 * @property float|null $total_amount
 * @property float|null $shipping_cost
 * @property float|null $refund_amount
 * @property string|null $payment_type
 * @property array|null $payment_details
 * @property float|null $exchange_rate
 * @property string $seller_approval
 * @property string $admin_approval
 * @property string $status
 * @property string|null $reject_reason
 * @property string|null $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\OrderDetail|null $orderDetail
 * @property-read \App\Models\User|null $processedBy
 * @property-read \App\Models\User|null $seller
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\RefundFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Refund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Refund query()
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereAdminApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereOrderDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund wherePaymentDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereProcessedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereRejectReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereSellerApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Refund whereUserId($value)
 */
	class Refund extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RegistrationRequest
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property int|null $otp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrationRequest whereUpdatedAt($value)
 */
	class RegistrationRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReloadOption
 *
 * @property int $id
 * @property int $option_id
 * @property string $telecom
 * @property string $facevalue
 * @property string $value
 * @property string $description
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereFacevalue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereTelecom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReloadOption whereValue($value)
 */
	class ReloadOption extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $status
 * @property string|null $title
 * @property float $rating
 * @property string|null $comment
 * @property array|null $images
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $image_link
 * @property-read mixed $review_date
 * @property-read \App\Models\Product $product
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReviewReply> $replies
 * @property-read int|null $replies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReviewLike> $reviewLikes
 * @property-read int|null $review_likes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUserId($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReviewLike
 *
 * @property int $id
 * @property int $user_id
 * @property string $reviewable_type
 * @property int $reviewable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $reviewable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereReviewableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereReviewableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewLike whereUserId($value)
 */
	class ReviewLike extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReviewReply
 *
 * @property int $id
 * @property int $user_id
 * @property int $review_id
 * @property int|null $parent_id
 * @property string|null $reply
 * @property string|null $images
 * @property int $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $reply_date
 * @property-read \App\Models\Review $review
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReviewLike> $reviewLikes
 * @property-read int|null $review_likes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereReviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewReply whereUserId($value)
 */
	class ReviewReply extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReviewSetting
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewSetting query()
 */
	class ReviewSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reward
 *
 * @property int $id
 * @property int $user_id
 * @property float $rewards
 * @property string|null $last_converted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $last_conversion
 * @property-read mixed $reward_sum
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RewardDetails> $rewardDetails
 * @property-read int|null $reward_details_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\RewardFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reward query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereLastConverted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereRewards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reward whereUserId($value)
 */
	class Reward extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RewardDetails
 *
 * @property int $id
 * @property int $reward_id
 * @property int $product_id
 * @property int $product_qty
 * @property int $reward
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Database\Factories\RewardDetailsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereProductQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereRewardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardDetails whereUpdatedAt($value)
 */
	class RewardDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property array|null $permissions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role withoutSuperadmin()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Search
 *
 * @property int $id
 * @property string $query
 * @property int $total_search
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SearchFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Search newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Search newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Search query()
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereTotalSearch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereUpdatedAt($value)
 */
	class Search extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerPackage
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerSubscription> $activeSubscriptions
 * @property-read int|null $active_subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerPackageLanguage> $packageLanguages
 * @property-read int|null $package_languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerSubscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackage query()
 */
	class SellerPackage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerPackageLanguage
 *
 * @property-read \App\Models\SellerPackage|null $package
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackageLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackageLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPackageLanguage query()
 */
	class SellerPackageLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerPayout
 *
 * @property int $id
 * @property int $user_id
 * @property float|null $amount
 * @property string|null $message
 * @property array|null $payment_to
 * @property string|null $payment_by
 * @property array|null $payment_from
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\SellerPayoutFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout wherePaymentBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout wherePaymentFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout wherePaymentTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPayout whereUserId($value)
 */
	class SellerPayout extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerProfile
 *
 * @property int $id
 * @property int $user_id
 * @property string $shop_name
 * @property string $slug
 * @property string|null $verified_at
 * @property string|null $license_no
 * @property array|null $tax_paper
 * @property array|null $logo
 * @property array|null $banner
 * @property array|null $shop_page_contents
 * @property array|null $mobile_shop_page_contents
 * @property int|null $shop_banner_id
 * @property array|null $shop_banner
 * @property string|null $shop_tagline
 * @property int|null $seller_country_id
 * @property string|null $phone_no
 * @property string|null $address
 * @property float|null $rating_count
 * @property int|null $reviews_count
 * @property string|null $facebook
 * @property string|null $google
 * @property string|null $twitter
 * @property string|null $youtube
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerProfileUser> $followedUsers
 * @property-read int|null $followed_users_count
 * @property-read mixed $image105x75
 * @property-read mixed $image120x80
 * @property-read mixed $image1920x412
 * @property-read mixed $image197x152
 * @property-read mixed $image297x203
 * @property-read mixed $image617x145
 * @property-read mixed $image82x82
 * @property-read mixed $image899x480
 * @property-read mixed $image90x60
 * @property-read float $rating
 * @property-read string $start_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $sellerProducts
 * @property-read int|null $seller_products_count
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile available()
 * @method static \Database\Factories\SellerProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereLicenseNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereMobileShopPageContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereRatingCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereReviewsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereSellerCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereShopBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereShopBannerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereShopPageContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereShopTagline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereTaxPaper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfile whereYoutube($value)
 */
	class SellerProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerProfileUser
 *
 * @property int $id
 * @property int $seller_profile_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser whereSellerProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerProfileUser whereUserId($value)
 */
	class SellerProfileUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SellerSubscription
 *
 * @property-read \App\Models\OfflineMethod|null $offline
 * @property-read \App\Models\SellerPackage|null $package
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SellerSubscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerSubscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerSubscription query()
 */
	class SellerSubscription extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $position
 * @property array|null $image
 * @property int|null $image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServiceLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $service_image
 * @property-read mixed $sub_title
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServiceLanguage> $serviceLanguages
 * @property-read int|null $service_languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceLanguage
 *
 * @property int $id
 * @property int $service_id
 * @property string $lang
 * @property string $title
 * @property string $sub_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLanguage whereUpdatedAt($value)
 */
	class ServiceLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $title
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Timezone|null $timezone
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShippingClass
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingClass query()
 */
	class ShippingClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property int $order
 * @property int $status
 * @property int $for_mobile
 * @property string $action_type
 * @property string $link
 * @property array|null $bg_image
 * @property int|null $bg_image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $text
 * @property string|null $button_text
 * @property-read \App\Models\Media|null $bgImage
 * @property-read \App\Models\Blog|null $blog
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Category|null $category
 * @property-read mixed $slider_bg_image
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereActionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBgImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBgImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereButtonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereForMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SliderLanguage
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SliderLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderLanguage query()
 */
	class SliderLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SmsTemplate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate query()
 */
	class SmsTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubscriberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Support
 *
 * @property int $id
 * @property string $subject
 * @property string $support_department_id
 * @property string $priority
 * @property string $status
 * @property int $user_id
 * @property string $ticket_id
 * @property int $viewed
 * @property int $client_viewed
 * @property array|null $file
 * @property string|null $ticket_body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SupportDepartment|null $supportDepartment
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\SupportFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Support newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Support newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Support query()
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereClientViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereSupportDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereTicketBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Support whereViewed($value)
 */
	class Support extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupportDepartment
 *
 * @property int $id
 * @property string|null $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SupportDepartmentLanguages> $supportDepartmentLanguages
 * @property-read int|null $support_department_languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereUpdatedAt($value)
 */
	class SupportDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupportDepartmentLanguages
 *
 * @property int $id
 * @property string $title
 * @property string $support_department_id
 * @property string $lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SupportDepartment|null $supportDepartment
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereSupportDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartmentLanguages whereUpdatedAt($value)
 */
	class SupportDepartmentLanguages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ThemeOptions
 *
 * @property int $id
 * @property string $name
 * @property array $options
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeOptions whereUpdatedAt($value)
 */
	class ThemeOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TicketReplay
 *
 * @property int $id
 * @property string $ticket_id
 * @property string|null $support_id
 * @property array|null $file
 * @property string|null $file_id
 * @property string|null $replay
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TicketReplayFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereReplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereSupportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketReplay whereUpdatedAt($value)
 */
	class TicketReplay extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Timezone
 *
 * @property int $id
 * @property string $country_code
 * @property string $timezone
 * @property string $gmt_offset
 * @property string $dst_offset
 * @property string $raw_offset
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereDstOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereGmtOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereRawOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timezone whereUpdatedAt($value)
 */
	class Timezone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Topup
 *
 * @property int $id
 * @property string|null $telecom
 * @property string $user_id
 * @property string $uid
 * @property string $telephone
 * @property string $value
 * @property string $currency
 * @property int $payment_status
 * @property string|null $status
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Topup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereTelecom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topup whereValue($value)
 */
	class Topup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $email
 * @property int|null $country_id
 * @property string|null $phone
 * @property string|null $password
 * @property array|null $permissions
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $user_type
 * @property string|null $gender
 * @property string|null $date_of_birth
 * @property int $status 0 inactive, 1 active
 * @property int $is_user_banned 0 unban, 1 ban
 * @property int $ai_review_option
 * @property int $newsletter_enable 0 unable, 1 enable
 * @property int|null $otp used for reset password
 * @property string|null $firebase_auth_id this is for mobile app.
 * @property string|null $currency_code
 * @property string|null $lang_code
 * @property int $is_password_set 0 for social login
 * @property array|null $images
 * @property array|null $socials it will be array data
 * @property string|null $last_login
 * @property string|null $last_ip
 * @property string|null $last_password_change
 * @property int|null $image_id
 * @property int|null $role_id
 * @property int|null $pickup_hub_id
 * @property float|null $balance
 * @property int $is_deleted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Account> $accounts
 * @property-read int|null $accounts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Activations\EloquentActivation> $activations
 * @property-read int|null $activations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Address> $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cart> $carts
 * @property-read int|null $carts_count
 * @property-read \App\Models\ChatRoom|null $chatRoom
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompareProduct> $compareLists
 * @property-read int|null $compare_lists_count
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\DeliveryHero|null $deliveryHero
 * @property-read mixed $active_subscription
 * @property-read mixed $billing_address
 * @property-read int $count_orders
 * @property-read mixed $full_name
 * @property-read mixed $last_recharge
 * @property-read mixed $phone_code
 * @property-read mixed $profile_image
 * @property-read mixed $shipping_address
 * @property-read mixed $user_profile_image
 * @property-read \App\Models\Media|null $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerPayout> $payout
 * @property-read int|null $payout_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Persistences\EloquentPersistence> $persistences
 * @property-read int|null $persistences_count
 * @property-read \App\Models\PickupHub|null $pickupHub
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Reminders\EloquentReminder> $reminders
 * @property-read int|null $reminders_count
 * @property-read \App\Models\Reward|null $reward
 * @property-read \App\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Roles\EloquentRole> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $sellerFeaturedProducts
 * @property-read int|null $seller_featured_products_count
 * @property-read \App\Models\SellerProfile|null $sellerProfile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SellerProfile> $sellers
 * @property-read int|null $sellers_count
 * @property-read \App\Models\SellerSubscription|null $subscription
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Support> $support
 * @property-read int|null $support_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Throttling\EloquentThrottle> $throttle
 * @property-read int|null $throttle_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wallet> $wallet
 * @property-read int|null $wallet_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAiReviewOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirebaseAuthId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsPasswordSet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsUserBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLangCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastPasswordChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNewsletterEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePickupHubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject, \Illuminate\Contracts\Auth\Authenticatable {}
}

namespace App\Models{
/**
 * App\Models\UserRole
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole query()
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSocial
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $icon
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial whereUserId($value)
 */
	class UserSocial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VatTax
 *
 * @property int $id
 * @property string $vat_tax
 * @property float $percentage
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VatTax whereVatTax($value)
 */
	class VatTax extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoShopping
 *
 * @property int $id
 * @property string $slug
 * @property int $user_id
 * @property int|null $thumbnail_id
 * @property array|null $thumbnail
 * @property string $style
 * @property string|null $video_type
 * @property string|null $video_url
 * @property int $is_live
 * @property int $status
 * @property int $enable_related_product
 * @property array|null $product_ids
 * @property int $total_viewed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VideoShoppingLanguage> $currentLanguage
 * @property-read int|null $current_language_count
 * @property-read mixed $image130x93
 * @property-read mixed $title
 * @property-read mixed $translate
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VideoShoppingLanguage> $videoShoppingLanguages
 * @property-read int|null $video_shopping_languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping active()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping query()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping sellerCheck()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereEnableRelatedProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereIsLive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereProductIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereThumbnailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereTotalViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereVideoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShopping whereVideoUrl($value)
 */
	class VideoShopping extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoShoppingLanguage
 *
 * @property int $id
 * @property int $video_shopping_id
 * @property string $lang our default locale for system en
 * @property string|null $title
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VideoShopping|null $videoShopping
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShoppingLanguage whereVideoShoppingId($value)
 */
	class VideoShoppingLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Wallet
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $order_id
 * @property float|null $amount
 * @property string|null $source opening_balance, wallet_recharge,refunded_to_wallet
 * @property string|null $type
 * @property string|null $payment_method
 * @property array|null $payment_details
 * @property string $status pending, approved, rejected
 * @property string|null $transaction_id
 * @property array|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $recharge_date
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\WalletFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet wherePaymentDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wallet whereUserId($value)
 */
	class Wallet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebsiteSeo
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\WebsiteSeoLanguage> $websiteSeoLanguages
 * @property-read int|null $website_seo_languages_count
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeo query()
 */
	class WebsiteSeo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebsiteSeoLanguage
 *
 * @property-read \App\Models\WebsiteSeo|null $websiteSeo
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeoLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeoLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteSeoLanguage query()
 */
	class WebsiteSeoLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WholesalePrice
 *
 * @property-read \App\Models\ProductStock|null $stock
 * @method static \Illuminate\Database\Eloquent\Builder|WholesalePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WholesalePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WholesalePrice query()
 */
	class WholesalePrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Wishlist
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cart|null $cart
 * @property-read mixed $order_date
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\WishlistFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUserId($value)
 */
	class Wishlist extends \Eloquent {}
}

