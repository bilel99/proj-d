<?php

namespace App\Models;

use ClassicO\NovaMediaLibrary\API;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Passport\HasApiTokens;

class Pages extends BasesModel
{
    use HasApiTokens;

    /**
     * Constant to Pages
     */
    public const PAGE_QUI_SOMME_NOUS = 'qui-sommes-nous';
    public const PAGE_NOS_SERVICES = 'nos-services';
    public const PAGE_COMMENT_PRENDRE_RDV = 'comment-prendre-rendez-vous';
    public const PAGE_TARIFS = 'tarifs';
    public const PAGE_MAISON_MEDICAL_GARDE = 'ou-se-situe-les-maisons-medicales-de-garde';
    public const PAGE_CONTACTS = 'contacts';
    public const PAGE_INFORMATIONS = 'nos-informations';
    public const PAGE_BANIERE_HOME = 'baniere-homepage';
    public const PAGE_BANIERE_QUI_SOMME_NOUS = 'baniere-qui-somme-nous';
    public const PAGE_BANIERE_TARIFS = 'baniere-tarifs';
    public const PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS = 'ce-que-les-docteurs-de-garde-ne-font-pas';
    public const PAGE_UN_RDV_QUEL_DELAI = 'un-rendez-vous-dans-quel-delai';
    public const PAGE_SUIS_JE_REMBOURSER = 'suis-je-rembourse-des-consultations';

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'unique_name',
        'title',
        'content',
        'media'
    ];

    /**
     * @return BelongsToMany
     */
    public function alerts(): BelongsToMany
    {
        return $this->belongsToMany(
            Alerts::class,
            'pages_alerts',
            'page_id',
            'alert_id')
            ->using(PageAlert::class)
            ->withTimestamps();
    }

    /**
     * @param int $id
     * @return string
     */
    public static function getRetrieveMedia(int $id)
    {
        $file = API::getFiles($id, null, true);

        return asset(sprintf('storage/%s', $file->path));
    }

    /**
     * @param string $unique_name
     * @return Pages
     */
    public static function getPage(string $unique_name): ?Pages
    {
        return self::where('unique_name', $unique_name)->first();
    }
}
