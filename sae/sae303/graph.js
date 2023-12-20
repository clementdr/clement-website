//graph Rapport cout / distance au 100km par type de carburant.

async function createGraph() {
  try {
    const data = await d3.json("data/rapport_cout_distance_100km.json");
    console.log("Données chargées :", data);

    var types = data.map((d) => d["type de véhicule"]);
    var couts = data.map((d) =>
      parseFloat(
        d["coût d'une recharge pour 100km sur autoroute"].replace(",", ".")
      )
    );

    var chart = c3.generate({
      bindto: "#graph1",
      data: {
        x: "Types",
        columns: [
          ["Types", ...types],
          ["Cout en €", ...couts],
        ],
        type: "bar",
      },
      axis: {
        x: {
          type: "category",
          categories: types,
          label: "Type de carburant",
        },
        y: {
          label: {
            text: "Coût en € pour une recharge pour 100km sur autoroute",
            position: "outer-middle",
          },
        },
      },
      bar: {
        width: {
          ratio: 0.5,
        },
      },
      color: {
        pattern: ["#1f77b4"], // Couleur bleue
      },
      tooltip: {
        format: {
          value: function (value) {
            return value + " €";
          },
        },
      },
      legend: {
        show: true, // Afficher la légende
        position: "bottom", // Position de la légende
        item: {
          // onclick: function () { },
          // onmouseover: function () { },
          // onmouseout: function () { }
        },
      },
    });
  } catch (error) {
    console.error("Erreur lors du chargement des données :", error);
  }
}

createGraph();

//fin graph Rapport cout / distance au 100km par type de carburant.

//graph rapport cout / temps de recharge.

// graph.js

async function createGraph2() {
  try {
    const data = await d3.json("data/rapport_cout_temps_recharge.json");

    var niveaux = data.map((d) => d["Niveau"]);
    var tempsRecharge = data.map((d) =>
      parseFloat(d["Temps de recharge (moyenne en heures)"])
    );
    var coutsRecharge = data.map((d) =>
      parseFloat(d["Coût d'une recharche (moyenne en €)"].replace(",", "."))
    );

    var chart = c3.generate({
      bindto: "#graph2",
      data: {
        x: "Niveaux",
        columns: [
          ["Niveaux", ...niveaux],
          ["Temps de recharge", ...tempsRecharge],
          ["Coût de recharge", ...coutsRecharge],
        ],
        types: {
          "Temps de recharge": "bar",
          "Coût de recharge": "bar",
        },
        colors: {
          "Temps de recharge": "#1f77b4",
          "Coût de recharge": "#ff7f0e",
        },
      },
      axis: {
        x: {
          type: "category",
          categories: niveaux,
          label: "Niveaux de recharge",
        },
        y: {
          label: {
            text: "Temps de recharge (heures) / Coût de recharge (€)",
            position: "outer-middle",
          },
        },
      },
      bar: {
        width: {
          ratio: 0.5,
        },
      },
      legend: {
        show: true,
        position: "bottom",
      },
    });
  } catch (error) {
    console.error("Erreur lors du chargement des données :", error);
  }
}

createGraph2();
