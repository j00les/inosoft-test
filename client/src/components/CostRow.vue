<script>
import Input from "@/components/Input.vue";
import Dropdown from "@/components/Dropdown.vue";
export default {
  components: { Input, Dropdown },
};
</script>

<template>
  <tr class="border border-red-500">
    <td class="w-10 shadow-sm">
      <Input :description="true" />
    </td>

    <td class="w-20 shadow-sm">
      <Input :quantity="true" />
    </td>

    <td class="w-20 shadow-sm">
      <Dropdown :uom="true" />
    </td>
    <td class="w-24 shadow-sm">
      <Input :unitPrice="true" />
    </td>
    <td class="w-20 shadow-sm">
      <Input :discount="true" />
    </td>

    <td class="w-20 shadow-sm">
      <Input :vat="true" />
    </td>

    <td>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        stroke-width="5"
        stroke="currentColor"
        class="w-7 h-6 text-grayish"
      >
        <path stroke-linecap="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
      </svg>
    </td>
    <td class="shadow-sm">
      <Dropdown :currency="true" />
    </td>
    <td class="shadow-sm">
      <p>0.00</p>
    </td>
    <td>
      <p>0.00</p>
    </td>
    <td>
      <p>0.00</p>
    </td>
    <td><Dropdown :chargeTo="true" /></td>
    <td>
      <button class="border rounded-sm p-1">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
        </svg>
      </button>
    </td>
  </tr>
</template>

<style></style>
