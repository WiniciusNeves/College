import pandas as pd
import random

categorias = ['Econômico', 'Compacto', 'SUV', 'Luxo', 'Blindado', 'Esportivo']
num_passageiros = [2, 4, 5, 7]
cap_malas = [1, 2, 3, 4, 5]
ar_condicionado = ['Sim', 'Não']
cambio = ['Manual', 'Automático']
tipo_carroceria = ['Sedan', 'Hatch', 'SUV', 'Esportivo']
potencia_motor = [110, 120, 150, 200, 300, 400, 500]
ano_modelo = [2018, 2019, 2020, 2021, 2022]
quilometragem = [5000, 10000, 25000, 30000, 40000]
blindado = ['Sim', 'Não']
valor_aluguel = [100, 150, 200, 300, 400, 500, 800, 1000, 1200]

n_linhas = 100
data = {
    'Categoria': [random.choice(categorias) for _ in range(n_linhas)],
    'Num_Passageiros': [random.choice(num_passageiros) for _ in range(n_linhas)],
    'Cap_Malas': [random.choice(cap_malas) for _ in range(n_linhas)],
    'Ar_Condicionado': [random.choice(ar_condicionado) for _ in range(n_linhas)],
    'Cambio': [random.choice(cambio) for _ in range(n_linhas)],
    'Tipo_Carroceria': [random.choice(tipo_carroceria) for _ in range(n_linhas)],
    'Potencia_Motor': [random.choice(potencia_motor) for _ in range(n_linhas)],
    'Ano_Modelo': [random.choice(ano_modelo) for _ in range(n_linhas)],
    'Quilometragem': [random.choice(quilometragem) for _ in range(n_linhas)],
    'Blindado': [random.choice(blindado) for _ in range(n_linhas)],
    'Valor_Aluguel': [random.choice(valor_aluguel) for _ in range(n_linhas)]
}

df = pd.DataFrame(data)

file_path = 'aluguel_carros_variado.csv'
df.to_csv(file_path, index=False)

print(f"Planilha salva em: {file_path}")

