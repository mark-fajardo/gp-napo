<script>
import { Line } from 'vue-chartjs'

export default {
    extends: Line,
    props : {
        aLabels : {
            type : Array,
            default () {
                return [
                    'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
                ];
            } 
        },
        aData : {
            type : Array,
            default () {
                return [
                    40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11
                ];
            } 
        },
        sLabel : {
            type : String,
            default : 'Monthly Report'
        },
        sBorderColor : {
            type : String,
            default : '#38C172'
        },
        sBgColor : {
            type : String,
            default : '#D8F3E3'
        }
    },
    mounted () {
        let oThis = this;
        this.renderChart({
            labels: oThis.aLabels,
            datasets: [
                {
                    label: oThis.sLabel,
                    borderColor: oThis.sBorderColor,
                    backgroundColor: oThis.sBgColor,
                    data: oThis.aData
                }
            ]
        })
    }
}
</script>