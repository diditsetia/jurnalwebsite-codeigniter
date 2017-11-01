<?php
// include APPPATH . 'libraries/fpdf_gen.php';
require_once APPPATH.'third_party/fpdf/fpdf-1.8.php';

class PDF extends FPDF
{
protected $col = 0; // Current column
protected $y0;      // Ordinate of column start

function Header()
{
    // Page header
    global $title;

    $this->SetFont('Arial','B',15);
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    $this->SetLineWidth(1);
    $this->Cell($w,9,$title,1,1,'C',true);
    $this->Ln(10);
    // Save ordinate
    $this->y0 = $this->GetY();
    // print_r($this->GetY());
    // die();
}

function Footer()
{
    // Page footer
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
    // Set position at a given column
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    // Method accepting or not automatic page break
    if($this->col<1)
    {
        // Go to next column
        $this->SetCol($this->col+1.5);
        // Set ordinate to top
        $this->SetY($this->y0-5);
        // Keep on page
        return false;
    }
    else
    {
        // Go back to first column
        $this->SetCol(0);
        // Page break
        return true;
    }
}

function ChapterTitle($num, $label)
{
    // Title
    $this->SetFont('Arial','',12);
    $this->SetFillColor(200,220,255);
    $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    $this->Ln(4);
    // Save ordinate
    $this->y0 = $this->GetY();
}

function ChapterBody($txt)
{
    // Read text file
    // $txt = file_get_contents(base_url()."application/controllers/".$file);
    // Font
    $this->SetFont('Times','',12);
    // Output text in a 6 cm width column
    $this->MultiCell(90,5,$txt);
    $this->Ln();
    // Mention
    $this->SetFont('','I');
    $this->Cell(0,5,'(end of excerpt)');
    // Go back to first column
    $this->SetCol(0);
}

function PrintChapter($num, $title, $file)
{
    // Add chapter
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}

$pdf = new PDF();
$title = '20000 Leagues Under the Seas';
$pdf->SetTitle($title);
$pdf->SetAuthor('Jules Verne');
$pdf->PrintChapter(1,'A RUNAWAY REEF','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;');
$pdf->PrintChapter(2,'THE PROS AND CONS','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Multoque hoc melius nos veriusque quam Stoici. Quis est, qui non oderit libidinosam, protervam adolescentiam? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Minime vero istorum quidem, inquit. Duo Reges: constructio interrete.

Quid ergo? Nihil enim hoc differt. Equidem etiam Epicurum, in physicis quidem, Democriteum puto. Quid de Pythagora? Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;

Quamquam te quidem video minime esse deterritum. Negat enim summo bono afferre incrementum diem. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nam quid possumus facere melius? Haec et tu ita posuisti, et verba vestra sunt. Quibusnam praeteritis?

Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat. Illis videtur, qui illud non dubitant bonum dicere -; Maximas vero virtutes iacere omnis necesse est voluptate dominante. Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Eaedem enim utilitates poterunt eas labefactare atque pervertere. Portenta haec esse dicit, neque ea ratione ullo modo posse vivi;');
$pdf->Output();
?>