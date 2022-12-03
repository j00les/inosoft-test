<script>
import { mapState, mapActions } from "vuex";
import ChevronIcon from "@/components/ChevronIcon.vue";

export default {
  props: {
    currency: Boolean,
    uom: Boolean,
    chargeTo: Boolean,
  },

  methods: {
    ...mapActions(["fetchUOM", "fetchCurrencies", "fetchCompanies"]),
  },

  computed: mapState({
    UOMData: "UOMData",
    currencies: "currencies",
    companies: "companies",
  }),

  created() {
    this.fetchUOM();
    this.fetchCurrencies();
    this.fetchCompanies();
  },
};
</script>
<template>
  <select
    v-if="uom"
    placeholder="Select an option"
    name="UOM"
    id="UOM"
    class="w-full ml-[.7rem] p-3 bg-semiwhite"
  >
    <option v-for="data in UOMData" :key="`UOM-${data.id}`" :value="data.name">
      {{ data.name }}
    </option>
  </select>

  <select
    v-else-if="currency"
    placeholder="Select an option"
    name="currency"
    id="currency"
    class="w-[5rem] p-3 bg-semiwhite"
  >
    <option
      :value="data.name"
      class="uppercase"
      v-for="data in currencies"
      :key="`currency-${data.id}`"
    >
      {{ data.name }}
    </option>
  </select>

  <select
    v-else-if="chargeTo"
    name="currency"
    id="currency"
    class="w-[14rem] p-3 bg-semiwhite ml-3"
  >
    <option value="" disabled selected>Select your option</option>
    <option class="uppercase" v-for="data in companies" :key="`company-${data.id}`">
      {{ data.name }}
    </option>
    <ChevronIcon />
  </select>
</template>
<style>
option {
  color: black;
}
select {
  color: black;
}
</style>
