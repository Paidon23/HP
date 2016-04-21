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
						min: 0,
						max: 1,
						attrs: {
							fill: "#d6ea99",
							stroke: "#404040",
							"font-family" : "'Montserrat', Helvetica, sans-serif"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "<1"
					},					{
						min: 1,
						max: 5,
						attrs: {
							fill: "#b7db4c",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "1 à 5"
					},
					{
						min: 5,
						max: 10,
						attrs: {
							fill: "#99cc00",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "5 à 10"
					},
					{
						min: 10,
						max: 20,
						attrs: {
							fill: "#6b8e00",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "10 à 20"
					},
					{
						min: 20,
						attrs: {
							fill: "#4c6600",
							stroke: "#404040"
						},
						legendSpecificAttrs: {
							stroke:'#ffffff',
							"stroke-width" : 2,
						},
						label: "> 20"
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
			"AZ": {
				"value": "23.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Azerbaidjan<\/span><br \/>Prévalence : 23,8 pour 100000 (1985)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"BE": {
				"value": "1.6",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Belgique<\/span><br \/>Prévalence : 1,6 pour 100000 (1970)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"CA": {
				"value": "8.4",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Canada (Manitoba et Saskatchewan)<\/span><br \/>Prévalence : 8,4 pour 100000 (1975)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"CN": {
				"value": "0.4",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Chine (Hong Kong)<\/span><br \/>Prévalence : 0,4 pour 100000 (1991)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"HR": {
				"value": "1.0",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Croatie<\/span><br \/>Prévalence : 1,0 pour 100000 (2002)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"EG": {
				"value": "21.0",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Égypte (Assiut)<\/span><br \/>Prévalence : 21,0 pour 100000 (1994)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"FI": {
				"value": "0.5",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Finlande<\/span><br \/>Prévalence : 0,5 pour 100000 (1987)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"FR": {
				"value": "7.0",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">France<\/span><br \/>Prévalence : 7,0 pour 100000 (1974)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"DE": {
				"value": "4.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Allemagne<\/span><br \/>Prévalence : 3,5 à 4,8 pour 100000 (1942 à 1987)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"IS": {
				"value": "2.7",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Islande<\/span><br \/>Prévalence : 2,7 pour 100000 (1969)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"IN": {
				"value": "1.7",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Inde (immigrants britanniques)<\/span><br \/>Prévalence : 1,7 pour 100000 (1990)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"IT": {
				"value": "4.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Italie<\/span><br \/>Prévalence : 2,5 à 4,8 pour 100000 (1976 à 1990)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"JP": {
				"value": "0.1",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Japon<\/span><br \/>Prévalence : 0,1 pour 100000 (1983)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"MT": {
				"value": "7.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Malte<\/span><br \/>Prévalence : 7,8 pour 100000 (1967)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"MX": {
				"value": "4.0",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Mexique<\/span><br \/>Prévalence : 4,0 pour 100000 (2008)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"NZ": {
				"value": "5.7",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Mexique<\/span><br \/>Prévalence : 5,7 pour 100000 (2008)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"NG": {
				"value": "0.2",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Nigeria (Ibadan)<\/span><br \/>Prévalence : 0,2 pour 100000 (1984)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"NO": {
				"value": "6.7",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Norvège<\/span><br \/>Prévalence : 6,7 pour 100000 (1986)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"PL": {
				"value": "4.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Pologne<\/span><br \/>Prévalence : 4,8 pour 100000 (1964)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"RU": {
				"value": "1.3",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Russie<\/span><br \/>Prévalence : 1,3 pour 100000 (2004)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"SI": {
				"value": "5.2",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Slovénie<\/span><br \/>Prévalence : 5,2 pour 100000 (2006)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			"ZA": {
				"value": "0.1",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Afrique du Sud<\/span><br \/>Prévalence : 0,01 pour 100000 (pop. noire) et 2,2 (pop. blanche et métisse) (1980)<sup><a href='references.php'>[17]</a></sup>"
				}
			},
			"ES": {
				"value": "1.4",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Espagne<\/span><br \/>Prévalence : 1,4 pour 100000 (1970)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"SE": {
				"value": "4.7",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Suède<\/span><br \/>Prévalence : 4,7 pour 100000 (1974)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"CH": {
				"value": "4.8",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Suisse<\/span><br \/>Prévalence : 4,8 pour 100000 (1949)<sup><a href='references.php'>[15]</a></sup>"
				}
			},
			"GB": {
				"value": "12.3",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Royaume-Uni<\/span><br \/>Prévalence : 12,3 pour 100000 (2013)<sup><a href='references.php'>[1]</a></sup>"
				}
			},
			"US": {
				"value": "10.0",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">États-Unis<\/span><br \/>Prévalence : 4,1 à 8,4 pour 100000 (1958 à 1975)<sup><a href='references.php'>[1]</a></sup>"
				}
			},
			"VE": {
				"value": "0.5",
				"attrs": {
					"href": "#"
				},
				"tooltip": {
					"content": "<span style=\"font-weight:bold;\">Venezuela<\/span><br \/>Prévalence : 699,2 pour 100000 (lac Maracaibo), 0,5 pour 100000 (pays)<sup><a href='references.php'>[16]</a></sup>"
				}
			},
			
		}
	});
});