<template>
    <div>
        <hero-banner-component
            :page_id="11"
            hero_banner_class="hero-banner-contact"
            logo_default="/img/logos/logo-icon.png">
        </hero-banner-component>

        <contact-component
            :page_id="6"
            class_id="contact"
            class_section="section-bg-white section-padding"
            routeName="">
        </contact-component>
    </div>
</template>

<script>
export default {
}
</script>