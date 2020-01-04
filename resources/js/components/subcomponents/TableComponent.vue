<template>
    <div class="container-fluid mt-3">
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col">
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                    </th>
                    <th scope="col" v-for="sCol in aColumn">{{ sCol }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="sBody in aData">
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                    </th>
                    <td>{{ sBody[1] }}</td>
                    <td>{{ sBody[2] }}</td>
                    <td>{{ sBody[3] }}</td>
                    <td>{{ sBody[4] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props : {
        aColumn : {
            type : Array,
            default () {
                return [
                    'Name', 'Brand', 'Category', 'Qty'
                ]
            }
        },
        aData : {
            type : Array,
            default () {
                return [
                    [1, 'Oven Toaster', 'Dowell', 'Toaster', 5],
                    [1, 'ABC Steamer', 'ABCApply', 'Steamer', 3]
                ]
            }
        }
    }
}
</script>