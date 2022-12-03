<script>
import Input from "@/components/Input.vue";
import Dropdown from "@/components/Dropdown.vue";
export default {
  components: { Input, Dropdown },
};
</script>

<template>
  <tr class="border">
    <td class="drop-shadow-custom" id="description">
      <Input :description="true" />
    </td>
    <td class="w-20 drop-shadow-custom">
      <Input :quantity="true" />
    </td>
    <td class="drop-shadow-custom">
      <Dropdown :uom="true" />
    </td>
    <td class="w-24 drop-shadow-custom">
      <Input :unitPrice="true" />
    </td>
    <td class="w-20 drop-shadow-custom">
      <Input :discount="true" />
    </td>
    <td class="w-20 drop-shadow-custom">
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
    <td class="drop-shadow-custom">
      <Dropdown :currency="true" />
    </td>
    <td class="w-[2rem]">
      <p class="ml-5 w-[5rem]">0.00</p>
    </td>
    <td>
      <p class="ml-5 w-[5rem]">0.00</p>
    </td>
    <td>
      <p class="ml-2">0.00</p>
    </td>
    <td class="drop-shadow-custom"><Dropdown :chargeTo="true" /></td>
    <td>
      <button class="drop-shadow-custom rounded-sm p-3 mx-2 bg-grayer">
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
<style>
td {
  padding: 15px 0px 15px 0px;

}
</style>
