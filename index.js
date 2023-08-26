const NUMBER_OF_EXERCISES_LIST_1 = 21;

function fillTable() {
  //Preenche a tabela com os exercicios da lista 1
  for (let i = 1; i <= NUMBER_OF_EXERCISES_LIST_1; i++) {
    document.getElementById("main-table").innerHTML += 
      `<tr onclick="openUrl('unidavi/programacao_web_I/exercicios/lista-1/ex${i < 10 ? "0" + i : i}/index.html')" class="bg-zinc-100 cursor-pointer hover:bg-zinc-400 hover:text-white duration-100">
      <td>
          Lista 1 - Exercicio ${i}
      </td>
      </tr>`;
  }

  return true;
}

window.onload = () => {
  console.log(fillTable() && "Tabela preenchida com sucesso! - Lista 1");
}

function openUrl(url) {
  window.open(url);
}