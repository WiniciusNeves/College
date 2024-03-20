library('tibble')
library('dplyr')
df1 <- tibble(
  matricula = c(256, 487, 965, 125, 458, 874, 963),
  nome = c("João", "Vanessa", "Tiago", "Luana", "Gisele", "Pedro", "Andre"),
  curso = c("Mat", "Mat", "Est", "Est", "Est", "Mat", "Est"),
  prova1 = c(80, 75, 95, 70, 45, 55, 30),
  prova2 = c(90, 75, 80, 85, 50, 75, NA),
  prova3 = c(80, 75, 75, 50, NA, 90, 30),
  faltas = c(4, 4, 0, 8, 16, 0, 20)
)
df1
View(df1)
df1_aranged<- df1 %>% arrange(matricula)
df1_aranged
df1 %>% filter(curso=="Est")
df1 %>% rename("mat"="matricula","fl"="faltas")
df1 %>% rename("porva1"="p1")
df1 %>% rename("prova2"="p2")
df1 %>% rename("prova3"="p3")
df1_renamed$media <-(df1_renamed$p1+df1_renamed$p2+df1_renamed$p3)/3
df1_renamed

df<- data.frame(nome = c("João", "Pedro", "MAria"),
  idade = c(25,30,28),altura = c(1,75,1.65,1.80))
df
df$IMC <- df$altura^2/df$idade 
df

df<-subset(df,select=-nome)

