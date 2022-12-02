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

    <table class="table-fixed border-separate border-spacing-y-2">
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
          <th></th>
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
    <div class="flex justify-between">
      <h2>exchange rate 1 usd = 3443AED</h2>

      <section class="flex items-center w-[27.5rem] justify-between">
        <article>
          <div class="flex border">
            <p>AED in total</p>
            <p>0</p>
            <p>0</p>
            <p>0</p>
          </div>
          <div class="flex border">
            <p>USD in total</p>
            <p>0</p>
            <p>0</p>
            <p>0</p>
          </div>
        </article>
        <div class="border bg-primary">
          <button class="p-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>
          </button>
        </div>
      </section>
    </div>
  </div>
</template>
<style></style>
