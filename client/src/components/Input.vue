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
    total: Boolean,
    chargeTo: Boolean,
    vendor: Boolean,
    attention: Boolean,
    quotation: Boolean,
    vendorAddress: Boolean,
  },
};
</script>
<template>
  <input
    v-if="description"
    placeholder="Description"
    class="w-full bg-semiwhite p-3 rounded-sm ml-2"
    type="text"
  />
  <input
    v-else-if="quantity"
    placeholder="Qty"
    class="w-[5rem] bg-semiwhite p-3 rounded-sm ml-[1.2rem]"
    type="number"
  />

  <input
    v-else-if="unitPrice"
    placeholder="Unit Price"
    class="w-[7rem] bg-semiwhite p-3 rounded-sm ml-[1.3rem]"
    type="number"
  />

  <input
    v-else-if="discount"
    placeholder="0"
    class="w-[6rem] bg-semiwhite border-blue-200 p-3 rounded-sm ml-[.7rem]"
    type="number"
  />
  <input
    placeholder="0"
    v-else-if="vat"
    class="w-[6rem] p-3 ml-[.7rem] bg-semiwhite rounded-sm"
    type="number"
  />

  <label v-else-if="attention" class="flex flex-col items-center  w-fit">
    <span class="self-start capitalize">attention of</span>
    <input placeholder="0" class="w-[6rem] p-3 ml-[.7rem] bg-semiwhite rounded-sm" type="text" />
  </label>

  <label v-else-if="quotation" class="flex flex-col items-center  w-fit">
    <span class="self-start capitalize">quotation no.</span>
    <input placeholder="0" class="w-[6rem] p-3 ml-[.7rem] bg-semiwhite rounded-sm" type="text" />
  </label>
  <label v-else-if="vendorAddress" class="flex flex-col items-center ">
    <span class="self-start capitalize">vendor address</span>
    <input placeholder="0" class="w-full p-3 ml-[.7rem] bg-semiwhite rounded-sm" type="text" />
  </label>
</template>
<style>
input::placeholder {
  color: black;
}
</style>
