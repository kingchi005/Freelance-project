	const add_btn = document.querySelector('#add');
		add_btn.onclick = function add() {
			const tbody = document.querySelector('.table tbody');
			var tr = document.createElement('tr');
			tr.innerHTML = `<td><input class="item" type="number" name="quant[]"></td> <td><input class="item" type="text" name="size[]"></td> <td><input class="item" type="text" name="color[]"></td>`;

			tbody.append(tr);
		}