<td class="p-0">
	<div class="d-flex w-100">
		<div class="col-6 border">
			<select class="form-control account-group-select">
				<option value="">Select Group</option>
				<?php 
				$groups = $conn->query("SELECT * FROM group_list");
				while($row = $groups->fetch_assoc()):
				?>
				<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php endwhile; ?>
			</select>
		</div>
		<div class="col-6 border">
			<select class="form-control account-select" disabled>
				<option value="">Select Account</option>
			</select>
		</div>
		<div class="col-3 border">
			<input type="text" class="form-control debit-input" placeholder="Debit" disabled>
		</div>
		<div class="col-3 border">
			<input type="text" class="form-control credit-input" placeholder="Credit" disabled>
		</div>
	</div>
</td>
<script>
	$(document).ready(function() {
		// On group selection change, populate accounts dropdown
		$('.account-group-select').on('change', function() {
			var group_id = $(this).val();
			var account_select = $(this).closest('.d-flex').find('.account-select');
			account_select.prop('disabled', true);
			account_select.html('<option value="">Loading...</option>');
			$.ajax({
				url: 'get_accounts.php',
				method: 'POST',
				data: {
					group_id: group_id
				},
				success: function(response) {
					account_select.html(response);
					account_select.prop('disabled', false);
				}
			});
		});

		// On account selection change, enable debit/credit inputs if account is debit/credit
		$(document).on('change', '.account-select', function() {
			var account_id = $(this).val();
			var debit_input = $(this).closest('.d-flex').find('.debit-input');
			var credit_input = $(this).closest('.d-flex').find('.credit-input');
			debit_input.prop('disabled', true);
			credit_input.prop('disabled', true);
			$.ajax({
				url: 'get_account_type.php',
				method: 'POST',
				data: {
					account_id: account_id
			},
			success: function(response) {
			if (response == 'debit') {
			debit_input.prop('disabled', false);
			} else if (response == 'credit') {
			credit_input.prop('disabled', false);
			}
			}
			});
			});
			});
			</script>
