<script>
import CostRow from "@/components/CostRow.vue";
import ChevronIcon from "@/components/ChevronIcon.vue";
export default {
  components: {
    CostRow,
    ChevronIcon,
  },
};
</script>

<template>
  <div>
    <div class="relative w-[7em]">
      <h1 class="text-primary capitalize">cost detail</h1>
      <ChevronIcon :costDetailHeader="true" />
    </div>

    <table class="table-fixed border-separate border-spacing-y-2 border-red-400 border">
      <thead class="border bg-secondary">
        <tr class="text-sm text-left w-[20rem]">
          <th>Description</th>
          <th>Qty</th>
          <th>UOM</th>
          <th>Unit Price</th>
          <th>Discount (%)</th>
          <th>VAT (%)</th>
          <th></th>
          <th>Currency</th>
          <th>VAT Amount</th>
          <th>Sub Total</th>
          <th>Total</th>
          <th>Charge To</th>
        </tr>
      </thead>

      <tbody class="border border-cyan-400">
        <CostRow />
        <CostRow />
        <CostRow />
        <CostRow />
        <CostRow />
        <CostRow />
      </tbody>
    </table>
  </div>
</template>
<style></style>
