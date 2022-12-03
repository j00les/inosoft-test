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
  <section>
    <h2>3rd Party Instruction</h2>

    <div class="w-full flex items-center gap-8">
      <Dropdown :logistic="true" />
      <Button :draftLogistic="true" />
    </div>
    <div class="flex flex-col">
      <div class="flex">
        <Dropdown :vendor="true" />
        <Input :attention="true" />
        <Input :quotation="true" />
        <Dropdown :invoice="true" />
      </div>
      <div>
        <Input :vendorAddress="true"/>
      </div>
    </div>
  </section>
</template>
<style></style>
