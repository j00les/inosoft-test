<script>
import { mapState, mapActions } from "vuex";
import ChevronIcon from "@/components/ChevronIcon.vue";

export default {
  props: {
    currency: Boolean,
    uom: Boolean,
    chargeTo: Boolean,
    logistic: Boolean,
    vendor: Boolean,
    invoice: Boolean,
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
  <div v-else-if="logistic" class="ml-4 relative">
    <select name="logistic" id="logistic" class="w-[13rem] p-3 bg-semiwhite pl-[2rem]">
      <option value="lov">Logistic Instruction</option>
      <option value="lig">asdlkj</option>
    </select>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      class="w-7 h-7 text-primary absolute top-3 fill-primary"
    >
      <path
        d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z"
      />
      <path
        d="M8.25 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zM15.75 6.75a.75.75 0 00-.75.75v11.25c0 .087.015.17.042.248a3 3 0 015.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 00-3.732-10.104 1.837 1.837 0 00-1.47-.725H15.75z"
      />
      <path d="M19.5 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
    </svg>
  </div>

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
  </select>

  <label v-else-if="vendor" class="flex flex-col items-center w-fit">
    <span class="self-start capitalize">assigned vendor</span>
    <select name="vendor" id="vendor" class="w-[20rem] p-3 bg-semiwhite capitalize">
      <option value="" disabled selected>Amarit & associate logistics co ltd</option>
    </select>
  </label>

  <label v-else-if="invoice" class="flex flex-col items-center w-fit">
    <span class="self-start capitalize">invoice to</span>
    <select name="invoice" id="invoice" class="w-[10rem] p-3 bg-semiwhite capitalize">
      <option value="" disabled selected>MITO</option>
    </select>
  </label>
</template>
<style>
option {
  color: black;
}
select {
  color: black;
}
</style>
