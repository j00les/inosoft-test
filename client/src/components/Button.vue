<script>
export default {
  props: {
    cancel: Boolean,
    draft: Boolean,
    submit: Boolean,
  },
};
</script>
<template>
  <button v-if="cancel">Cancel</button>
  <button v-else-if="draft" class="border border-grayish px-5 py-2.5 rounded-md bg-white">Save As Draft</button>

  <button v-else-if="submit" class="bg-primary rounded-md px-20 py-2.5 text-white ">Submit</button>
</template>
