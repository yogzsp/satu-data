<canvas id="{{$tag}}"></canvas>
<script>
        let {{$tag}}Chart = document.getElementById("{{$tag}}");
        let {{$tag}}Labels = JSON.parse({!! json_encode($label) !!});
        let {{$tag}}Data = JSON.parse({!! json_encode($data) !!});
        @isset($bg)
            let {{$tag}}BGColor = JSON.parse({!! json_encode($bg) !!});
        @endisset

        new Chart({{$tag}}Chart, {
            type: 'doughnut',
            data: {
            labels: {{$tag}}Labels,
            datasets: [{
                label: "{{$slot}}",
                data: {{$tag}}Data,
                @isset($bg)
                    borderWidth: {{isset($borderw) ? $borderw : 1}} ,
                    backgroundColor:{{$tag}}BGColor
                @else
                    borderWidth: {{isset($borderw) ? $borderw : 1}}
                @endisset
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
</script>