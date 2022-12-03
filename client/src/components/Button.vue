<script>
export default {
  props: {
    cancel: Boolean,
    draft: Boolean,
    submit: Boolean,
    draftLogistic: Boolean,
  },
};
</script>
<template>
  <button v-if="cancel">Cancel</button>
  <button v-else-if="draft" class="border border-grayish px-5 py-2.5 rounded-md bg-white">
    Save As Draft
  </button>
  <button v-else-if="submit" class="bg-primary rounded-md px-20 py-2.5 text-white">Submit</button>
  <div v-else-if="draftLogistic" class="border-b pb-2 mt-2 w-full">
    <button class="bg-primary rounded-full h-fit w-40 px-4 text-white">Draft</button>
  </div>
</template>
