<script>
import Dropdown from "./Dropdown.vue";
import Button from "./Button.vue";
import Input from "./Input.vue";
export default {
  components: {
    Dropdown,
    Button,
    Input,
  },
};
</script>

<template>
  <section class="mt-14">
    <h2 class="mb-2">3rd Party Instruction</h2>
    <section class="border">
      <div class="w-full flex items-center gap-8">
        <Dropdown :logistic="true" />
        <Button :draftLogistic="true" />
      </div>
      <div class="flex pb-5">
        <div class="flex flex-col ml-[15rem] border-r-2 gap-3 w-fit pr-6 mt-4 border-dashed">
          <div class="flex gap-3">
            <Dropdown :vendor="true" />
            <Input :attention="true" />
            <Input :quotation="true" />
            <Dropdown :invoice="true" />
          </div>
          <div class="w-[52rem]">
            <Input :vendorAddress="true" />
          </div>
        </div>
        <div class="flex flex-col items-center justify-center ml-5 gap-1 mt-4">
          <Input customerContract="true" />
          <Input :customerPO="true" />
        </div>
      </div>
    </section>
  </section>
</template>
