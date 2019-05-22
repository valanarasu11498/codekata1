#include <stdio.h>
int main()
{
    char a[20],b[20];
    int i,j;
    gets(a);
    gets(b);
    while(a[i]!='\0')
    {
        i++;
    }
    while(b[j]!='\0')
    {
        a[i]=b[j];
        i++;
        j++;
    }
    j=i-1;
    i=0;
    while(i<=j)
    {
        printf("%c",a[i]);
        i++;
    }
    
    return 0;
}
