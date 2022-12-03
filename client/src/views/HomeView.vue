<script>
import { mapState, mapActions } from "vuex";

import CostTable from "@/components/CostTable.vue";
import Button from "@/components/Button.vue";

export default {
  components: {
    CostTable,
    Button,
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
  <div class="border w-fit mx-auto p-20 flex flex-col">
    <!-- component b -->
    <CostTable />

    <div class="self-end flex gap-7 mt-5 h-auto">
      <Button :cancel="true" />
      <Button :draft="true" />
      <Button :submit="true" />
    </div>
  </div>
</template>
