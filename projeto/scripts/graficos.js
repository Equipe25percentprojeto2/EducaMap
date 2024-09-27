let seguidoresChart, taxaConversaoChart, favoritosChart;

function criarGraficos() {
    const ctxSeguidores = document.getElementById('seguidoresChart').getContext('2d');
    const ctxTaxaConversao = document.getElementById('taxaConversaoChart').getContext('2d');
    const ctxFavoritos = document.getElementById('favoritosChart').getContext('2d');


    if (!seguidoresChart) {
        seguidoresChart = new Chart(ctxSeguidores, {
            type: 'line',
            data: {
                labels: ['Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set'],
                datasets: [{
                    label: 'Seguidores',
                    data: [0, 300, 1000, 700, 1500, 1200],
                    borderColor: 'rgba(46, 65, 221, 1)',
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(46, 65, 221, 0.3)'
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        align: 'end',      // Alinha a legenda com a borda direita do gráfico
                        labels: {
                            color: '#333333',  // Cor mais escura do texto
                            font: {
                                size: 16,      // Tamanho maior da fonte
                                weight: 'bold' // Texto em negrito
                            }
                        }
                    }
                },
                layout: {
                    padding: {
                        right: 20 // Adiciona um pequeno espaçamento à direita da legenda
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#333333',  // Define o texto mais escuro
                            font: {
                                size: 16,       // Aumenta o tamanho da fonte
                                weight: 'bold'  // Torna o texto mais "pesado"
                            },
                            padding: 10       // Adiciona espaçamento extra
                        }
                    },
                    y: {
                        ticks: {
                            color: '#333333',  // Define o texto mais escuro
                            font: {
                                size: 16,       // Aumenta o tamanho da fonte
                                weight: 'bold'  // Torna o texto mais "pesado"
                            }
                        }
                    }
                }
            }
        });
    }
    
    

    if (!taxaConversaoChart) {
        taxaConversaoChart = new Chart(ctxTaxaConversao, {
            type: 'line',
            data: {
                labels: ['Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set'],
                datasets: [{
                    label: 'Se increveram',
                    data: [15, 43, 33, 34, 35, 40],
                    borderColor: 'rgba(204, 65, 94, 1)',
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(204, 65, 94, 0.3)'
                },
                {
                    label: 'Salvaram algum curso',
                    data: [13, 34, 43, 44, 41, 52],
                    borderColor: 'rgba(46, 65, 221, 1)',
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(46, 65, 221, 0.3)'
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 16
                            },
                            color: '#333'
                        },
                        align: 'end', // Centraliza na direita
                        position: 'top',
                        fullSize: true, // Expande na largura
                    }
                }
            }
        });
    }

    // Gráfico de Linha - Favoritos
    if (!favoritosChart) {
        favoritosChart = new Chart(ctxFavoritos, {
            type: 'line',
            data: {
                labels: ['Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set'],
                datasets: [{
                    label: 'Favoritaram',
                    data: [5, 10, 12, 23, 25, 34],
                    borderColor: 'rgba(204, 65, 94, 1)',
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(204, 65, 94, 0.3)'
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 16
                            },
                            color: '#333'
                        },
                        align: 'end',
                        position: 'top',
                        fullSize: true,
                    }
                }
            }
        });
    }
    
}

// Execute a função para criar os gráficos apenas uma vez
document.addEventListener('DOMContentLoaded', criarGraficos);