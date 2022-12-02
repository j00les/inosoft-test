<script>
import { mapState, mapActions } from "vuex";
import CostTable from "@/components/CostTable.vue";

export default {
  components: {
    CostTable,
  },
  methods: {
    ...mapActions(["fetchUOM", "fetchCompanies", "fetchCurrencies"]),
  },

  computed: mapState({
    UOMData: "UOMData",
    companies: "companies",
    currencies: "currencies",
  }),

  created() {},
};
</script>

<template>
  <main class="border mx-auto p-20 flex flex-col">
    <section><p>lanjut tar</p></section>
    <section class="mx-auto">
      <CostTable />
    </section>
  </main>
</template>
