const NUMBER_OF_EXERCISES_LIST_1 = 21;
const NUMBER_OF_EXERCISES_LIST_2 = 1;

function fillHTMLList(content) {
  for (let i = 1; i <= NUMBER_OF_EXERCISES_LIST_1; i++) {
    content.toBeAdded +=
     `<tr onclick="openUrl('unidavi/programacao_web_I/exercicios/lista-1/ex${i < 10 ? "0" + i : i}/index.html')" class="dark:bg-zinc-800 dark:text-zinc-200 b bg-zinc-100 cursor-pointer hover:bg-zinc-400 hover:text-white duration-100 group"}">
        <td class="p-1 border-b border-r border-zinc-600 group-last:rounded-bl-md group-last:border-b-0">
            HTML | Exercício ${i}
        </td>
      </tr>`;
  }
}

  function fillCSSList(content) {
    for (let i = 1; i <= NUMBER_OF_EXERCISES_LIST_2; i++) {
      content.toBeAdded +=
        `<tr onclick="openUrl('unidavi/programacao_web_I/exercicios/lista-2/ex${i < 10 ? "0" + i : i}/index.html')" class="dark:bg-zinc-800 dark:text-zinc-200 b bg-zinc-100 cursor-pointer hover:bg-zinc-400 hover:text-white duration-100 group"}">
          <td class="p-1 border-b border-r border-zinc-600 group-last:rounded-bl-md group-last:border-b-0">
              CSS | Exercício ${i}
          </td>
        </tr>`;
    }
  }
  


function fillTable() {
  let content = { toBeAdded: "" };
  //Preenche a tabela com os exercicios da lista 1
  fillHTMLList(content);
  //Preenche a tabela com os exercicios da lista 2
  fillCSSList(content);
  console.log(content.toBeAdded);

  document.getElementById("main-table").innerHTML += content.toBeAdded;

  return true;
}

window.onload = () => {
  console.log(fillTable() && "Tabela preenchida com sucesso!");
}

function openUrl(url) {
  window.open(url);
}