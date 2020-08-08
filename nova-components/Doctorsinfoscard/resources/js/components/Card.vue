<template>
  <card class="flex flex-col items-center justify-center">
    <div class="px-3 py-3 w-full">
      <div class="content-box">
        <div>
          <h1 class="text-2xl text-80 font-light text-center">
            Vos {{ datas.count > 1 ? 'médecins' : 'médecin' }}
          </h1>

          <h2 class="text-5xl text-center">{{ datas.count }}</h2>
          <p class="text-xs text-center">Il y'a {{ datas.count }} {{ datas.count > 1 ? 'médecins' : 'médecin' }}</p>
        </div>
      </div>
    </div>
  </card>
</template>

<script>
export default {
  props: [
    'card',

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],
  data() {
    return {
      datas: [],
    }
  },
  mounted() {
    Nova.request().get("/nova-vendor/doctorsinfoscard/data")
        .then(response => {
          this.datas = response.data[0]
        })
  },
}
</script>
