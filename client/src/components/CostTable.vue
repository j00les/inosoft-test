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
  <div class="w-fit mx-auto">
    <div class="relative w-[8em]">
      <h1 id="cost" class="font-bold text-lg text-primary capitalize">cost detail</h1>
      <ChevronIcon :costDetailHeader="true" />
    </div>
    <table class="table-fixed h-fit border-collapse p-1 pb-0 mt-2">
      <thead class="bg-secondary">
        <tr class="text-sm text-left w-[20rem] p-2">
          <th class="border-t border-l w-[14rem]">Description</th>
          <th class="w-[5rem] border-t pl-6">Qty</th>
          <th class="w-[5rem] pl-10 border-t">UOM</th>
          <th class="w-[6.9rem] pl-10 border-t">Unit Price</th>
          <th class="w-[5rem] pl-[1rem] border-t">Discount (%)</th>
          <th class="w-[3rem] pl-[2rem] border-t">VAT (%)</th>
          <th class="border-t"></th>
          <th class="border-t">Currency</th>
          <th class="border-t">VAT Amount</th>
          <th class="border-t">Sub Total</th>
          <th class="border-t">Total</th>
          <th class="pl-5 border-t">Charge To</th>
          <th class="border-r border-t"></th>
        </tr>
      </thead>
      <tbody class="border border-cyan-400">
        <CostRow />
        <CostRow />
        <CostRow />
      </tbody>
    </table>
    <div class="flex justify-between border-l border-r border-b">
      <div class="flex gap-7 mt-3">
        <h2 class="capitalize pl-2 text-gray-500 font-bold">
          exchange rate 1 <span class="text-gray-500 font-bolduppercase">usd</span> =
        </h2>
        <h2 class="text-gray-500 font-bold capitalize">
          3.6725 <span class="uppercase">aed</span>
        </h2>
      </div>
      <section class="flex items-center w-[39.3rem] justify-between h-auto">
        <article class="font-semibold">
          <div class="total flex w-full bg-secondary pt-1 p-1.5 gap-2 text-center px-2">
            <p>AED in total</p>
            <div class="flex gap-[3.9rem]">
              <p class="ml-0.5">0.00</p>
              <p class="ml-2">0.00</p>
              <p class="pr-4">0.00</p>
            </div>
          </div>
          <div class="flex total w-full bg-secondary p-1.5 px-2 gap-2 mt-1 text-center">
            <p>USD in total</p>
            <div class="flex gap-[3.9rem]">
              <p class="ml-0.5">0.00</p>
              <p class="ml-2">0.00</p>
              <p class="pr-4">0.00</p>
            </div>
          </div>
        </article>
        <div class="bg-primary mr-1.5 rounded-sm">
          <button class="p-3 text-white">
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
<style>
th {
  padding: 7px 0 7px 10px;
  color: grey;
  font-weight: 700;
}
.total {
  color: black;
}

#cost {
  font-weight: 600;
}
</style>
