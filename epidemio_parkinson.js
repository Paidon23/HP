$(function () {
	$(".mapcontainer").mapael({
		map: {
			name: "world_countries",
				zoom: {
					enabled: true,
					maxLevel:10
				},
			defaultArea: {
				attrs: {
					fill: "#ffffff",
					stroke: "#404040",
					"stroke-width": 1,
					"font-family" : "'Montserrat', Helvetica, sans-serif"
				},
				// , attrsHover: {
                    // fill: "#a4e100"
                // }
			}
		},
		legend: {
			area: {
				mode: "horizontal",
				title: "",
				labelAttrs: {
					"font-size": 12,
				},
				marginLeft: 5,
				marginLeftLabel: 5,
				slices: [
					{
						max: 20,
						attrs: {
							fill: "#99cc00",
							stroke: "#404040",
							"font-family" : "'Montserrat', Helvetica, sans-serif"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "< 20"
					},					{
						min: 20,
						max: 50,
						attrs: {
							fill: "#6b8e00",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "20 à 50"
					},
					{
						min: 50,
						max: 100,
						attrs: {
							fill: "#3d5100",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "50 à 100"
					},
					{
						min: 100,
						attrs: {
							fill: "#1e2800",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "> 100"
					}
				]
			},
		},
		areas: {
			"AU": {
				"value": "12.1",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Australie (Tasmanie)<\/span><br \/>Prévalence : 12,1 pour 100000 (1990)<sup><a href='references.php'>[15]</a></sup>"
				}
			},			
		}
	});
});