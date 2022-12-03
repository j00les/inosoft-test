<script>
import { mapState, mapActions } from "vuex";

import CostTable from "@/components/CostTable.vue";
import Button from "@/components/Button.vue";
import LogisticsInstruction from "@/components/LogisticInstruction.vue";

export default {
  components: {
    CostTable,
    Button,
    LogisticsInstruction,
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
  <div class="w-fit mx-auto mt-0 flex flex-col">
    <!-- COMPONENT A -->
    <LogisticsInstruction />
    <!-- COMPONENT B -->
    <CostTable />
    <div class="self-end flex gap-7 h-auto bg-semiwhite w-full mt-10 justify-end py-5 rounded-sm">
      <Button :cancel="true" />
      <Button :draft="true" />
      <Button :submit="true" />
    </div>
  </div>
</template>
