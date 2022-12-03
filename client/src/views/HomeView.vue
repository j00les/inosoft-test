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
};
</script>

<template>
  <div class="w-fit mx-auto p-20 flex flex-col">
    <!-- COMPONENT B-->
    <CostTable />

    <div class="self-end flex gap-7 h-auto bg-semiwhite w-full mt-10 justify-end py-5 rounded-sm">
      <Button :cancel="true" />
      <Button :draft="true" />
      <Button :submit="true" />
    </div>
  </div>
</template>
