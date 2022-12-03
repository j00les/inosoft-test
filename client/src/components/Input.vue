<script>
import ChevronIcon from "@/components/ChevronIcon.vue";
export default {
  components: {
    ChevronIcon,
  },
  props: {
    description: Boolean,
    quantity: Boolean,
    unitPrice: Boolean,
    discount: Boolean,
    vat: Boolean,
    ["vat-amount"]: Boolean,
    ["sub-total"]: Boolean,
    total: Boolean,
    chargeTo: Boolean,
  },
};
</script>
<template>
  <input
    v-if="description"
    placeholder="Description"
    class="w-full bg-semiwhite p-3 rounded-sm"
    type="text"
  />
  <input
    v-else-if="quantity"
    placeholder="Qty"
    class="w-full bg-semiwhite mx-3 p-3 border-blue-200 rounded-sm"
    type="number"
  />
  <input
    v-else-if="unitPrice"
    placeholder="Unit Price"
    class="w-full bg-semiwhite border-blue-200 p-3 rounded-sm mx-4"
    type="number"
  />
  <input
    v-else-if="discount"
    class="w-full bg-semiwhite border-blue-200 p-1 rounded-sm"
    type="number"
  />
  <input v-else-if="vat" class="w-full border-blue-200 bg-semiwhite p-1 rounded-sm" type="number" />
</template>
