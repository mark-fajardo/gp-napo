<template>
    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">{{ sTitle }}</h3>
                    <p class="card-text">{{ sCardLabel }}</p>
                </div>
                <!-- <div class="col-sm-6">
                    <a href="#" class="btn btn-success">{{ sButtonText }}</a>  
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : {
        sTitle : {
            type : String,
            default : 'N/A'
        },
        sCardLabel : {
            type : String,
            default : 'N/A'
        },
        sButtonText : {
            type : String,
            default : 'More Details'
        }
    }
}
</script>