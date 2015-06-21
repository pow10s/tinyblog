unit Unit1;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls;

type
  TForm1 = class(TForm)
    lbl1: TLabel;
    edt1: TEdit;
    lbl: TLabel;
    edt2: TEdit;
    lbl2: TLabel;
    edt4: TEdit;
    btn1: TButton;
    mmo2: TMemo;
    mmo1: TMemo;
    edt3: TEdit;
    procedure btn1Click(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;
  a,d,i,g: integer;
  vids:Real;

implementation

{$R *.dfm}

procedure TForm1.btn1Click(Sender: TObject);
begin
  with Form1 do
  begin
    mmo1.lines.clear;   //очистити MEMO
    mmo2.lines.clear;
    for i:=1 to StrToInt(edt1.text) do
    begin
       d:= StrToInt(edt3.text) - StrToInt(edt2.text) + 1;  //підрахунок діапазону для рандом
       a:= random(d) + StrToInt(edt2.text);                  // Random
       mmo1.lines.add(IntToStr(a));    //вивід рандомних чисел
       mmo2.lines.add(IntToStr(a));
    end;
     i:=0;
      while i < mmo2.Lines.Count do
         begin
            if mmo2.Lines.IndexOf(Mmo2.Lines[i]) < i then mmo2.Lines.Delete(i) // видалення не "уникальних" записів
            else inc(i);
         end;
  end;
  g:=StrToInt(edt1.text)-mmo2.lines.Count;  //підрахунок записів, що повторюються
  mmo1.lines.add('-кількість повторів-');
  mmo1.lines.add(IntToStr(g));
  vids:=(g/StrToInt(edt1.text))*100; // підрахунок відсотка повторів випадкових чисел
  edt4.Text:=(FloatToStr(vids));

end;
end.
