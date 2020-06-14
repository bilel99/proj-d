<template>
    <div>
        <hero-banner-component
                :page_id="8"
                hero_banner_class="hero-banner"
                logo_default="/img/logos/logo-icon.png">
        </hero-banner-component>

        <page-component
                :page_id="1"
                class_id="about"
                class_section="section-bg-white section-padding"
                routeName="">
        </page-component>

        <service-component
                :page_id="2">
        </service-component>

        <page-component
                :page_id="3"
                class_id="make-appointment"
                class_section="section-bg-white section-padding"
                route_name="appointment">
        </page-component>

        <!-- section transition -->
        <section id="section-transition" class="section-transition section-padding"></section>
        <!-- /end section -->

        <price-component
                :page_id="4"
                class_id="prices"
                class_section="section-bg-grey section-padding"
                route_name="prices">
        </price-component>

        <medical-house-component
                :page_id="5"
                class_id="medical-house"
                class_section="section-bg-white section-padding">
        </medical-house-component>

        <!-- Transition Contact -->
        <section id="transition-contact" class="transition-contact d-flex justify-content-center align-items-center">
            <a href="" class="boxed-btn3">Nous contacter</a>
        </section>
        <!-- /end -->

        <information-component
                :page_id="7"
                class_id="information"
                class_section="section-bg-grey section-padding"
                img_default="/img/informations-image.png">
        </information-component>
    </div>
</template>

<script>
export default {
}
</script>