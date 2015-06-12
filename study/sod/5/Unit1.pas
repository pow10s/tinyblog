unit Unit1;


interface

{$j+}

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls, ExtCtrls, Grids;

type
  TForm1 = class(TForm)
    mmo2: TMemo;
    Exit: TButton;
    Sort1: TButton;
    Output1: TButton;
    mmo1: TMemo;
    procedure Output1Click(Sender: TObject);
    procedure ExitClick(Sender: TObject);
    procedure Sort1Click(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;



const
  n = 9;

type
    Stud  = record
    LName: string[20];
    Name: string[10];
    Group: integer;
    Fiz:Integer;
    Mat:Integer;
    Progr:Integer;
  end;

  stat_array_of_Stud= array [1..n] of Stud ;

const
  mcycl_1: stat_array_of_Stud=
  ((LName:'�������'; Name:'������'; Group:104;  Fiz:1; Mat:3; Progr:2),
  (LName:'�������'; Name:'��������'; Group:134;  Fiz:2;Mat:2; Progr:3),
  (LName:'��������'; Name:'������'; Group:107;  Fiz:3; Mat:1; Progr:4),
  (LName:'�����'; Name:'���������'; Group:107;  Fiz:4; Mat:5; Progr:1),
  (LName:'����������'; Name:'�����'; Group:119;  Fiz:5; Mat:4; Progr:6),
  (LName:'��������'; Name:'�����'; Group:104;  Fiz:6; Mat:6; Progr:5),
  (LName:'�������'; Name:'������'; Group:105;  Fiz:7; Mat:8; Progr:7),
  (LName:'�������'; Name:'������'; Group:105;  Fiz:8; Mat:7; Progr:9),
  (LName:'�������������'; Name:'����'; Group:134;  Fiz:9; Mat:9; Progr:8));


var
  Form1: TForm1;
  i, j: byte;

implementation

{$R *.dfm}


// ���� ������ � TMemo1
procedure Output_array_into_TMemo(initial, final: byte; ex_array: stat_array_of_Stud);

begin
  Form1.mmo1.Lines.Add('�������' + ' ' + '��"�' + ' |' + '�����' + ' |' + 'Գ�.' + ' |' + '���.'+ ' |' + '����.');
  for i:= initial to final do
    begin
      Form1.mmo1.Lines.Add(ex_array[i].LName + ' ' + ex_array[i].Name + ' |' + IntToStr(ex_array[i].Group) + ' |' + IntToStr(ex_array[i].Fiz) + ' |' + IntToStr(ex_array[i].Mat)+ ' |' + IntToStr(ex_array[i].Progr));
    end;
end;


// ���� ������ � TMemo2
procedure Output_array_into_TMemo1(initial, final: byte; ex_array: stat_array_of_Stud);

begin
  Form1.mmo2.Lines.Add('�������' + ' ' + '��"�' + ' |' + '�����' + ' |' + 'Գ�.' + ' |' + '���.'+ ' |' + '����.');
  for i:= initial to final do
    begin
      Form1.mmo2.Lines.Add(ex_array[i].LName + ' ' + ex_array[i].Name + ' |' + IntToStr(ex_array[i].Group) + ' |' + IntToStr(ex_array[i].Fiz) + ' |' + IntToStr(ex_array[i].Mat)+ ' |' + IntToStr(ex_array[i].Progr));
    end;
end;


// ���������� ������
procedure Sort(input_arr: stat_array_of_Stud; var output_arr: stat_array_of_Stud);
  var

    temp_Stud : Stud ;
begin
  for i:= 1 to n-1 do
    begin
      for j:= i+1 to n do
        begin
          if input_arr[i].LName > input_arr[j].LName then    //��������� ���� ������ ������
              begin
                temp_Stud := input_arr[i];
                input_arr[i]:= input_arr[j];
                input_arr[j]:= temp_Stud ;
              end;
        end;
    end;
  output_arr:= input_arr;
end;


// ��������� ���� ����� ��������
//���� ����������� ������
procedure TForm1.Output1Click(Sender: TObject);
var
  init: byte;
begin
  Form1.mmo1.Lines.Add('���������� �����:');  
  Form1.mmo1.Lines.Add('');
  init:= 1;
  Output_array_into_TMemo(init, n, mcycl_1);
  Form1.Output1.Enabled:= false;
end;
//
//���� ������������� ������
procedure TForm1.Sort1Click(Sender: TObject);
begin
  Form1.mmo2.Lines.Add('³����������� �����:');  
  Form1.mmo2.Lines.Add('');
  Sort(mcycl_1, mcycl_1);
  Output_array_into_TMemo1(1, n, mcycl_1);
  Form1.Sort1.Enabled:= false;
end;
//

procedure TForm1.ExitClick(Sender: TObject);
begin
  Application.Terminate;
end;
//���� ��������� ���� ����� ��������

end.

