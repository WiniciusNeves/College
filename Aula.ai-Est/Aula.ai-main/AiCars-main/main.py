import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder, StandardScaler
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_absolute_error

data = pd.read_csv('aluguel_carros_completo.csv')

label_encoder = LabelEncoder()

data['Categoria'] = label_encoder.fit_transform(data['Categoria'])
data['Ar_Condicionado'] = label_encoder.fit_transform(data['Ar_Condicionado'])
data['Cambio'] = label_encoder.fit_transform(data['Cambio'])
data['Tipo_Carroceria'] = label_encoder.fit_transform(data['Tipo_Carroceria'])
data['Blindado'] = label_encoder.fit_transform(data['Blindado'])

X = data[['Categoria', 'Num_Passageiros', 'Cap_Malas', 'Ar_Condicionado', 'Cambio', 'Tipo_Carroceria', 'Potencia_Motor', 'Ano_Modelo', 'Quilometragem', 'Blindado']]
y = data['Valor_Aluguel']  

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

scaler = StandardScaler()
X_train = scaler.fit_transform(X_train)
X_test = scaler.transform(X_test)


model = LinearRegression()
model.fit(X_train, y_train)


y_pred = model.predict(X_test)


def pegar_entrada_usuario():
    categoria = input("Informe a categoria (0=Econômico, 1=Compacto, 2=SUV, 3=Luxo, 4=Blindado, 5=Esportivo): ")
    num_passageiros = input("Informe o número de passageiros: ")
    cap_malas = input("Informe a capacidade do porta-malas (em malas): ")
    ar_condicionado = input("Possui ar-condicionado (0=Não, 1=Sim): ")
    cambio = input("Informe o tipo de câmbio (0=Manual, 1=Automático): ")
    tipo_carroceria = input("Informe o tipo de carroceria (0=Sedan, 1=Hatch, 2=SUV, 3=Esportivo): ")
    potencia_motor = input("Informe a potência do motor (em cavalos): ")
    ano_modelo = input("Informe o ano do modelo: ")
    quilometragem = input("Informe a quilometragem do veículo: ")
    blindado = input("O carro é blindado? (0=Não, 1=Sim): ")
    
    return [
        int(categoria), int(num_passageiros), int(cap_malas), int(ar_condicionado), int(cambio), 
        int(tipo_carroceria), float(potencia_motor), int(ano_modelo), int(quilometragem), int(blindado)
    ]


entrada_usuario = pegar_entrada_usuario()


entrada_usuario_normalizada = scaler.transform([entrada_usuario])


valor_estimado = model.predict(entrada_usuario_normalizada)
print(f"Valor estimado do aluguel para o carro informado: R${valor_estimado[0]:.2f}")
