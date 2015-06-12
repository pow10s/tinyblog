unit Unit1;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, Grids, StdCtrls;

type
  TForm1 = class(TForm)
    StringGrid1: TStringGrid;
    mmo1: TMemo;
    btn1: TButton;
    btn2: TButton;
    procedure FormCreate(Sender: TObject);
    procedure btn2Click(Sender: TObject);
    procedure btn1Click(Sender: TObject);
    

  private
    { Private declarations }
  public
    { Public declarations }
  end;

const n=4;
      m=7;
var
  Form1: TForm1;
  a:array [1..n] of array [1..m] of integer =((10,20,30,-9,-7,8,23), //����� � ������� ����������
                                              (21,15,-1,0,7,23,19),
                                              (-7,18,9,-2,-8,0,7),
                                              (4,5,-1,0,17,20,10));
  b:array [1..m] of string =('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'); //����� ��� �����
  c:array [1..n] of Byte =(6,12,18,24); //����� ����� � �� ���� ������� �����������
  i,j:byte;

implementation

{$R *.dfm}

procedure mass;
begin
  with Form1 do
  begin
  for i:=1 to n do
   begin
     for j:=1 to m do
        begin
              StringGrid1.Cells[0,i]:=IntToStr(c[i]);
              StringGrid1.Cells[j,i]:=IntToStr(a[i,j]);   //���� ����� � �������
              StringGrid1.Cells[j,0]:=b[j];
        end;
   end;
  end;
end;

procedure averege;
var aver:Real;
begin
  aver:=0;
  with Form1 do
  begin
    StringGrid1.Cells[0,5]:='Aver';
      for i:=1 to m do
       begin
         for j:=1 to n do
            begin
              aver:=aver+StrToInt(StringGrid1.Cells[i,j]);     //��������� �������� ����������� �� ����
              StringGrid1.Cells[i,5]:=(FloatToStr(aver/4));
            end;
       end;

  end;
 
end;

procedure max20;

begin
  with Form1 do
  begin
     mmo1.lines.clear; //������� MEMO
     j:=2;
       for i:=1 to m do
          if StrToInt(StringGrid1.Cells[i,j])>20 then //�� � ������������ � 12 ����� ����� �� 20
             mmo1.Lines.Add(StringGrid1.Cells[i,0]+'='+StringGrid1.Cells[i,j]); //���� ��� � ������������ � 12 ����� ������ �� 20
  end;
end;

procedure TForm1.FormCreate(Sender: TObject);
begin
 mass;     //��������� ������� ������ � ������
 averege;    //��������� �������� ����������� �� ����
 max20;    //���� ��� � ������������ � 12 ����� ������ �� 20
end;


procedure TForm1.btn2Click(Sender: TObject);
begin
  averege; //��������� �������� ����������� �� ����
end;

procedure TForm1.btn1Click(Sender: TObject);
begin
  max20; //���� ��� � ������������ � 12 ����� ������ �� 20
end;

end.
