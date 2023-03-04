<template>
  <div>
    <div class="row">
      <div class="col-6">
        <p class="inline">Total {{ count }}</p>
      </div>

      <div class="col-6">
        <p class="float-right">
          <span class="text-primary">Page</span>
          <template v-for="(link, n) in links" :key="n">
            <Component
              :is="link.url ? 'Link' : 'span'"
              v-if="link.active || getLabel(link.label) == '<'"
              @click="paginateData(link.url)"
              v-html="getLabel(link.label)"
              class="px-1 text-primary"
              :class="link.active ? 'text-primary' : ''"
            />
          </template>
          <span class="text-primary"
            >of
            {{ totalPages }}
          </span>
          <Component
            :is="links[links.length - 1].url ? 'Link' : 'span'"
            v-if="getLabel(links[links.length - 1].label) == '>'"
            @click="paginateData(links[links.length - 1].url)"
            v-html="getLabel(links[links.length - 1].label)"
            class="px-1 text-primary"
          />
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    links: Array,
    count: Number,
    totalPages: Number,
  },
  methods: {
    getLabel(label) {
      if (label === "&laquo; Previous") {
        return "<";
      }
      if (label === "Next &raquo;") {
        return ">";
      }

      return label;
    },

    paginateData(url) {
      this.$inertia.visit(url, {
        preserveScroll: true,
        preserveState: true,
        replace: true,
      });
    },
  },
};
</script>
