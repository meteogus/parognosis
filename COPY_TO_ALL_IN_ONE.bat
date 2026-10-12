@echo off
setlocal EnableExtensions
title COPY ROOT FILES TO ALL IN ONE

REM Source folder is the folder containing this BAT.
REM Add "." to avoid a trailing backslash inside quotes.
set "SOURCE=%~dp0."
set "DEST=D:\GD\myWEATHER\GRhost\All in one"

if not exist "%DEST%" (
    echo ERROR: Destination folder does not exist:
    echo "%DEST%"
    pause
    exit /b 1
)

for %%I in ("%SOURCE%") do set "SOURCE_FULL=%%~fI"
for %%I in ("%DEST%") do set "DEST_FULL=%%~fI"

if /I "%SOURCE_FULL%"=="%DEST_FULL%" (
    echo ERROR: The BAT is inside the destination folder.
    echo Put it in the source folder instead.
    pause
    exit /b 1
)

echo.
echo ================================================
echo   COPY ROOT FILES TO ALL IN ONE
echo ================================================
echo.
echo Source:      "%SOURCE%"
echo Destination: "%DEST%"
echo.
echo Only files directly inside the source folder will be copied.
echo Subfolders and their contents will NOT be copied.
echo Existing destination files with the same names may be overwritten.
echo Nothing will be deleted from either folder.
echo.

choice /C YN /N /M "Continue? (Y/N): "
if errorlevel 2 (
    echo.
    echo CANCELLED. Nothing was copied.
    pause
    exit /b 0
)

robocopy "%SOURCE%" "%DEST%" *.* /LEV:1 /R:1 /W:1 /COPY:DAT
set "RC=%ERRORLEVEL%"

echo.
if %RC% GEQ 8 (
    echo COPY FAILED. Robocopy error code: %RC%
) else (
    echo COPY COMPLETED.
)

echo.
pause
endlocal
