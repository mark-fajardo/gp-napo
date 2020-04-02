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
        aData2 : {
            type : Array,
            default () {
                return [];
            } 
        },
        sTitle : {
            type : String,
            default : 'Monthly Report'
        },
        sLabel : {
            type : String,
            default : 'Monthly Report'
        },
        sLabel2 : {
            type : String,
            default : 'Monthly Report'
        },
        sBorderColor : {
            type : String,
            default : '#38C172'
        },
        sBgColor : {
            type : String,
            default : '#FFFFFF'
        },
        sBorderColor2 : {
            type : String,
            default : '#33cccc'
        },
        sBgColor2 : {
            type : String,
            default : '#FFFFFF'
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
                },
                {
                    label: oThis.sLabel2,
                    borderColor: oThis.sBorderColor2,
                    backgroundColor: oThis.sBgColor2,
                    data: oThis.aData2
                }
            ]
        },
        {
            responsive: true,
            title: {
            display: true,
            text: oThis.sTitle
            },
            tooltips: {
            mode: 'label',
            },
            hover: {
            mode: 'nearest',
            intersect: true
            },
            scales: {
            xAxes: [{
                display: true,
                ticks: {
                userCallback: function(label, index, labels) {
                    if(typeof label === "string")
                {
                    return label.substring(0,9) + '...'
                }
                    return label
            
                },
                },
                scaleLabel: {
                display: true,
                labelString: 'Equipment'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                display: true,
                labelString: 'Value'
                }
            }]
            }
        })
    }
}
</script>