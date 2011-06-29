<div class="our-address">
<p><?= $invoice['User']['full_name'] ?></p>
<p><?= $invoice['User']['address_line1'] ?></p>
<p><?= $invoice['User']['address_line2'] ?></p>
<p><?= $invoice['User']['city'] ?>, <?= $invoice['User']['state'] ?> <?= $invoice['User']['zip'] ?></p>
</div>

<div class="their-address">
<p><?= $invoice['Client']['User']['full_name'] ?></p>
<p><?= $invoice['Client']['User']['address_line1'] ?></p>
<p><?= $invoice['Client']['User']['address_line2'] ?></p>
<p><?= $invoice['Client']['User']['city'] ?>, <?= $invoice['Client']['User']['state'] ?> <?= $invoice['Client']['User']['zip'] ?></p>
</div>



<div class="invoice-details">
<table align="right" cellpadding="2" cellspacing="0" id="inv_box">
<tbody><tr>
<th>Invoice #:</th>
<td><?= str_pad($invoice['Invoice']['id'], 7, '0', STR_PAD_LEFT); ?></td>
</tr>
<tr>
<th>Date:</th>
<td><?= $this->Time->niceShort($invoice['Invoice']['created']); ?></td>
</tr>
<tr>
<th>Amount Due  USD:</th>
<td><?= $this->Number->currency($invoice['Invoice']['amt_due'], 'USD'); ?></td>
</tr>
</tbody></table>
</div>


<div style="clear: both"></div>

<div class="line-items">
<table id="line-items">
<th>Notes</th>
<th>Hours</th>
<th>Rate</th>
<th>Line Total</th>
<? foreach($invoice['LineItem'] as $line_item): ?>
<tr>
<td><?= $line_item['notes'] ?></td>
<td><?= $line_item['hours'] ?></td>
<td><?= $line_item['rate'] ?></td>
<td><?= $this->Number->currency($line_item['line_total'], 'USD', array('before' => false, 'after' => false)) ?></td>
</tr>
<? endforeach; ?>
</table>
</div>

<div class="invoice-notes">
<p>Notes: <?=$invoice['Invoice']['notes'];?></p>
</div>

<div class="invoice-totals">
<div class="invoice-subtotal"><strong>Subtotal: <?=$this->Number->currency($invoice['Invoice']['subtotal'], 'USD', array('before' => false, 'after' => false));?></strong></div>
<div class="invoice-total"><strong>Total: <?=$this->Number->currency($invoice['Invoice']['total'], 'USD', array('before' => false, 'after' => false));?></strong></div>
<div class="invoice-paid"><strong>Amount Paid: <?=$this->Number->currency($invoice['Invoice']['amt_paid'], 'USD', array('before' => false, 'after' => false));?></strong></div>
<div class="invoice-balance"><strong>Balance: <?= $this->Number->currency($invoice['Invoice']['balance'], 'USD');?></strong></div>
</div>
