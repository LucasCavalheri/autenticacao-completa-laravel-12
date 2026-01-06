# Laravel API Authentication — Projeto Completo

Este repositório contém a implementação **completa e profissional de autenticação em Laravel**, com foco em **APIs reais**, **organização de código** e **boas práticas utilizadas no mercado**.

O objetivo deste projeto não é apresentar um exemplo simples apenas para funcionar, mas sim demonstrar **como estruturar uma autenticação pronta para produção**, com código limpo, escalável e bem organizado.

---

## 🎥 Vídeo Explicativo

Todo o código deste repositório é explicado passo a passo no vídeo:

👉 **Assista aqui:**  
`https://www.youtube.com/watch?v=Ij8igIpqtEY`

> Recomenda-se assistir ao vídeo para entender as decisões de arquitetura e organização do projeto.

---

## 🚀 O que você vai encontrar neste projeto

### 🔐 Autenticação via API
A autenticação foi implementada de forma modular e profissional, contendo os seguintes controllers dentro de `Api/Auth`:

- **LoginController**  
  Responsável pela autenticação do usuário e geração do token

- **RegisterController**  
  Responsável pelo cadastro de novos usuários e disparo do e-mail de boas-vindas

- **LogoutController**  
  Responsável por invalidar o token do usuário autenticado

- **ProfileController**  
  Responsável por retornar os dados do usuário autenticado

---

## 🧩 Conceitos e boas práticas aplicadas

- Padronização de respostas HTTP usando **Traits**
- Uso de **API Resources** para controle total do retorno
- Envio de e-mail de boas-vindas com **Laravel Notifications**
- Processamento assíncrono utilizando **Filas (Queues)**
- Uso de **Single Action Controllers**
- Separação de rotas por módulo
- Uso correto de `config` para variáveis de ambiente (ex: URL do frontend)
- Documentação automática da API utilizando **Laravel Scramble**

---

## 🎯 Para quem este projeto é indicado

Este projeto é ideal para quem:

- Já utiliza Laravel e quer subir o nível
- Trabalha ou pretende trabalhar com APIs
- Busca escrever código mais limpo, organizado e profissional
- Quer entender decisões reais de arquitetura em projetos Laravel

---

## 📘 Documentação da API

A documentação da API é gerada automaticamente com **Laravel Scramble**.

Após subir o projeto, acesse:
`https://localhost:8000/docs/api`
