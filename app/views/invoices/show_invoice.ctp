<div class="our-address">
<p>Jonathan Silverman</p>
<p>14870 Los Gatos Bvld</p>
<p>Los Gatos, CA 95032</p>
</div>

<div class="their-address">
<p><?= $invoice['Client']['name'] ?></p>
<p><?= $invoice['Client']['address_line1'] ?></p>
<p><?= $invoice['Client']['address_line2'] ?></p>
<p><?= $invoice['Client']['city'] ?>, <?= $invoice['Client']['state'] ?> <?= $invoice['Client']['zip'] ?></p>
</div>

<div class="invoice-details">
<div class="invoice-number">Invoice <?= $invoice['Invoice']['id'] ?></div>
<div class="invoice-date"><?= $this->Time->nice($invoice['Invoice']['created']); ?></div>
<div class="invoice-due">Amount Due: <?= $invoice['Invoice']['amt_due'] ?></div>
</div>

<div style="clear: both"></div>

<div class="line-items">
<table>
<th>Notes</th>
<th>Hours</th>
<th>Rate</th>
<th>Line Total</th>
<? foreach($invoice['LineItem'] as $line_item): ?>
<tr>
<td><?= $line_item['notes'] ?></td>
<td><?= $line_item['hours'] ?></td>
<td><?= $line_item['rate'] ?></td>
<td><?= $line_item['line_total'] ?></td>
</tr>
<? endforeach; ?>
</table>
</div>

<div class="invoice-notes">
<p>Notes: <?=$invoice['Invoice']['notes'];?></p>
</div>

<div class="invoice-totals">
<div class="invoice-subtotal"><strong>Subtotal: <?=$invoice['Invoice']['subtotal'];?></strong></div>
<div class="invoice-total"><strong>Total: <?=$invoice['Invoice']['total'];?></strong></div>
<div class="invoice-paid"><strong>Amount Paid: <?=$invoice['Invoice']['amt_paid'];?></strong></div>
<div class="invoice-balance"><strong>Balance: <?=$invoice['Invoice']['balance'];?></strong></div>
</div>
