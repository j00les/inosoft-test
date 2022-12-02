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
  <div v-if="uom" class="w-full">
    <select placeholder="Select an option" name="UOM" id="UOM" class="w-full p-1 bg-semiwhite">
      <option v-for="data in UOMData" :key="`UOM-${data.id}`" :value="data.name">
        {{ data.name }}
      </option>
    </select>
  </div>

  <div v-else-if="currency" class="rounded-sm">
    <select
      placeholder="Select an option"
      name="currency"
      id="currency"
      class="w-full p-1 bg-semiwhite"
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
  </div>
  <div v-else-if="chargeTo" class="rounded-sm">
    <select name="currency" id="currency" class="w-full p-1 bg-semiwhite">
      <option value="" disabled selected>Select your option</option>
      <option class="uppercase" v-for="data in companies" :key="`company-${data.id}`">
        {{ data.name }}
      </option>
      <ChevronIcon />
    </select>
  </div>
</template>
