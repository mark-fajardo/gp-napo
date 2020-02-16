<template>
    <li class="list-group-item list-image">
      <div class="image-wrapper">
        <img :src="imageData.src" alt="imageData.name" class="image rounded">
      </div>
      <div class="info">
        <div style="align-items: flex-start; flex: 1">
          <p class="mb-0 font-weight-bold desc">{{ imageData.name }}</p>
          <small>{{ toReadableSize(imageData.size) }}</small>
        </div>
        <div style="align-items: flex-end; display: flex; justify-content: flex-end">
          <button type="button" class="btn btn-light btn-sm" @click="deleteImageHandler(imageData.name)">Remove</button>
        </div>
      </div>
    </li>
</template>

<script>
import { ElementMixin } from 'vue-slicksort';
export default {
    mixins: [ElementMixin],
    props: ['imageData'],
    methods: {
      toReadableSize(size) {
        const units = ['bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        let l = 0, n = parseInt(size, 10) || 0;
        while (n >= 1024 && ++l) {
            n = n/1024;
        }
        return (n.toFixed(n < 10 && l > 0 ? 1 : 0) + ' ' + units[l]);
      },
      deleteImageHandler(name) {
        this.$emit('delete', name)
      }
    }
}
</script>

<style scoped>
  .list-image {
    display: flex;
    flex-direction: row;
    overflow: hidden;
  }

  .image-wrapper {
    width: 100px;
    height: 100px;
    min-width: 100px;
    min-height: 100px;
  }

  .image {
    width: 100%;
    height: 100%;
    min-width: 100%;
    min-height: 100%;
    object-fit: cover
  }

  .desc {
    width: calc(100% - 50px);
    text-overflow: ellipsis
  }

  .info {
    flex: 1;
    margin-left: 10px;
    display: flex;
    flex-direction: column
  }
</style>