# Previsão de Aluguel Diário de Carros com Regressão Linear

Este projeto visa criar um modelo de IA utilizando Regressão Linear para prever o valor do aluguel diário de carros com base em diversas características. O objetivo é ajudar empresas de aluguel de carros a definir preços competitivos e precisos no mercado.

## Funcionalidades

- Geração automática de um dataset de veículos com diferentes características.
- Transformação de variáveis categóricas em valores numéricos para uso em modelos de machine learning.
- Implementação de um modelo de Regressão Linear para prever o valor de aluguel diário de veículos.
- Avaliação do modelo com métricas de erro como MAE (Erro Médio Absoluto).

## Dados Utilizados

O dataset gerado contém 100 entradas com as seguintes variáveis:

- **Categoria do Veículo**: Econômico, Compacto, SUV, Luxo, Blindado, Esportivo.
- **Número de Passageiros**: Varia de 2 a 7 passageiros.
- **Capacidade do Porta-Malas**: Varia de 1 a 5 malas.
- **Possui Ar-Condicionado**: Sim ou Não.
- **Tipo de Câmbio**: Manual ou Automático.
- **Tipo de Carroceria**: Sedan, Hatch, SUV, Esportivo.
- **Potência do Motor**: Varia de 110 a 500 cavalos.
- **Ano do Modelo**: Modelos entre 2018 e 2022.
- **Quilometragem**: Varia de 5.000 a 40.000 km.
- **Blindado**: Sim ou Não.
- **Valor do Aluguel Diário**: Varia de R$ 100 a R$ 1.200.

## Execução do Código

### Pré-requisitos

Certifique-se de ter o Python instalado e as bibliotecas necessárias:

```bash
pip install pandas scikit-learn
```
