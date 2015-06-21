object Form1: TForm1
  Left = 321
  Top = 251
  Width = 603
  Height = 454
  Caption = 'Bazilevskiy #4'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  OnCreate = FormCreate
  PixelsPerInch = 96
  TextHeight = 13
  object StringGrid1: TStringGrid
    Left = 24
    Top = 24
    Width = 529
    Height = 161
    BorderStyle = bsNone
    ColCount = 8
    FixedColor = clActiveCaption
    RowCount = 6
    Options = [goFixedVertLine, goFixedHorzLine, goVertLine, goHorzLine, goRangeSelect, goEditing]
    TabOrder = 0
    ColWidths = (
      64
      64
      64
      64
      64
      64
      64
      64)
    RowHeights = (
      24
      24
      24
      24
      24
      24)
  end
  object mmo1: TMemo
    Left = 24
    Top = 240
    Width = 529
    Height = 145
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -21
    Font.Name = 'Tahoma'
    Font.Style = []
    Lines.Strings = (
      'mmo1')
    ParentFont = False
    TabOrder = 1
  end
  object btn1: TButton
    Left = 216
    Top = 200
    Width = 129
    Height = 33
    Caption = '12 (T > 20)'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -21
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    TabOrder = 2
    OnClick = btn1Click
  end
  object btn2: TButton
    Left = 24
    Top = 148
    Width = 65
    Height = 26
    Caption = 'Averege'
    TabOrder = 3
    OnClick = btn2Click
  end
end
